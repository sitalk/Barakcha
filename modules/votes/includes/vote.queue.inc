<?php

/**
 * @file
 * Declares the VoteRecalculationQueue which handles the recalculation of queued
 * votes during cron.
 */

class VoteRecalculationQueue implements DrupalReliableQueueInterface {
  protected $queue;

  public function __construct($name) {
    // Nothing to do here.
  }

  public function createItem($item) {
    if (!isset($item->qid)) {
      $item->qid = vote_queue_key($item);
    }

    if (!isset($this->queue[$item->qid])) {
      $this->queue[$item->qid] = $item;

      $fields = array(
        'qid' => $item->qid,
        'bundle' => $item->bundle,
        'aggregate' => $item->aggregate,
        'entity_type' => $item->entity_type,
        'entity_id' => $item->entity_id,
        'created' => REQUEST_TIME,
      );
      
      $query = db_merge('vote_queue')
        ->key(array('qid' => $item->qid))
        ->insertFields($fields);

      return $query->execute();
    }

    return FALSE;
  }

  public function numberOfItems() {
    return db_select('vote_queue')
      ->countQuery()
      ->execute()
      ->fetchField();
  }

  public function claimItem($lease = 30) {  
    $data = db_select('vote_queue', 'q')
      ->fields('q')
      ->condition('expire', 0)
      ->range(0, 1)
      ->orderBy('created', 'DESC')
      ->execute()
      ->fetchObject();
      
    if (!empty($data)) {
      $item = new stdClass();
      $item->expire = time() + $lease;
      $item->created = $data->created;      
      $item->qid = $data->qid;

      unset($data->created, $data->expire, $data->qid);

      $item->data = $data;

      $update = db_update('vote_queue')
        ->fields(array('expire' => $item->expire))
        ->condition('qid', $item->qid)
        ->condition('expire', 0);
        
      if ($update->execute()) {         
        return $item;
      }
    }

    return FALSE;
  }

  public function releaseItem($item) {
    $update = db_update('vote_queue')
      ->fields(array('expire' => 0))
      ->condition('qid', $item->qid);

    return $update->execute();
  }
    
  public function deleteItem($item) {
    db_delete('vote_queue')
      ->condition('qid', $item->qid)
      ->execute();

    unset($this->queue[$item->qid]);
  }
  
  public function createQueue() {
    // Nothing to do here.
  }

  public function deleteQueue() {
    $this->queue = array();

    db_truncate('vote_queue')
      ->execute();
  }
}

class VoteRecalculationStaticQueue implements DrupalQueueInterface {
  protected $queue;

  public function __construct($name) {
    $this->queue = array();
  }

  public function createItem($data) {
    if (!isset($data->qid)) {
      $data->qid = vote_queue_key($data);
    }

    if (!isset($this->queue[$data->qid])) {
      $item = new stdClass();
      $item->data = $data;
      $item->created = time();
      $item->expire = 0;
      $item->qid = $data->qid;

      $this->queue[$item->qid] = $item;
    }
  }

  public function numberOfItems() {
    return count($this->queue);
  }

  public function claimItem($lease = 30) {
    foreach ($this->queue as $key => $item) {
      if ($item->expire == 0) {
        $item->expire = time() + $lease;
        $this->queue[$key] = $item;

        return $item;
      }
    }

    return FALSE;
  }

  public function deleteItem($item) {
    unset($this->queue[$item->qid]);
  }

  public function releaseItem($item) {
    if (isset($this->queue[$item->qid]) && $this->queue[$item->qid]->expire != 0) {
      $this->queue[$item->qid]->expire = 0;

      return TRUE;
    }

    return FALSE;
  }

  public function createQueue() {
    // Nothing needed here.
  }

  public function deleteQueue() {
    $this->queue = array();
  }
}