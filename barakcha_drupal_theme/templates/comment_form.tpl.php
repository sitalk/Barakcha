<div class="comment_form">

<div class="template_comment_form_id">
<?php print drupal_render($form['form_id']); ?>
</div>

<div class="template_comment_form_author">
<?php print drupal_render($form['author']); ?>
</div>

<div class="template_comment_form_subject">
<?php print drupal_render($form['subject']); ?>
</div>

<div class="template_comment_form_body">
<?php print drupal_render($form['comment_body']); ?>
</div>


<div clas="template_comment_form_submit">
<?php print drupal_render($form['actions']['preview']); ?>
</div>

<div clas="template_comment_form_submit">
<?php print drupal_render($form['actions']['submit']); ?>
</div>

