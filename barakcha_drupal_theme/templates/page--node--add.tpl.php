
<div><?php print drupal_render($form['title']); ?></div>
	
	<!--Print the body input field-->
	
	<div><?php print drupal_render($form['body']); ?></div>
		
	<!--Print the rest of the form-->
	<div>
		<?php print drupal_render_children($form); ?>
	</div>
