
<div>
<?php
 $form = node_edit('blog');
?>
</div>
<!--Print the form input title field-->
<div><?php print drupal_render($form['title']); ?></div>
	
	<!--Print the form input body field-->
	
	<div><?php print drupal_render($form['body']); ?></div>
		
	<!--Print the rest of the form-->
	<div>
		<?php print drupal_render_children($form); ?>
	</div>
