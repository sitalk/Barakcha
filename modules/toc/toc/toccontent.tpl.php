<?php

/**
 * This is the tpl for the toc content drop down.
 * tocBody => array of complete toc field data.
 */
?>

<div id="toc-container" class="toc-data">
	<?php foreach ($tocBody as $key=>$value): ?>
		<h2 id="toc-item-<?php print $key ?>"><?php print $value['title']; ?></h2>
		<div class="toc-body-content"><?php print $value['body']; ?></div>
	<?php endforeach; ?>
</div>
