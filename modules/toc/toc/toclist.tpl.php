<?php

/**
 * This is the tpl for the toc list drop down.
 * tocBody => array of complete toc field data.
 */
?>

<div id="toc-list-container">
	<h3>Table of content</h3>
	<ol>
		<li><a href="#start">Introduction</a></li>
		<?php foreach ($tocBody as $key=>$value): ?>
			<li><a href="#toc-item-<?php print($key) ?>"><?php print $value['title']; ?></a></li>
		<?php endforeach; ?>
	</ol>
</div>