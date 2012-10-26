<div>
<span>Новичок</span>
<ul style="display:inline; list-style:none;">
<li style="display:inline;">
<?php
print theme('rate_button', array(
'text' => $links[0]['text'],
'href' => $links[0]['href'],
'class' => "extra-class")
); ?>
</li>
<li style="display:inline;">
<?php
print theme('rate_button', array(
'text' => $links[1]['text'],
'href' => $links[1]['href'],
'class' => "extra-class")
);
?>
</li>
<li style="display:inline;">
<?php
print theme('rate_button', array(
'text' => $links[2]['text'],
'href' => $links[2]['href'],
'class' => "extra-class")
);
?>
</li>
<li style="display:inline;">
<?php
print theme('rate_button', array(
'text' => $links[3]['text'],
'href' => $links[3]['href'],
'class' => "extra-class")
);
?>
</li>
<li style="display:inline;">
<?php
print theme('rate_button', array(
'text' => $links[4]['text'],
'href' => $links[4]['href'],
'class' => "extra-class")
);
?>
</li>
</ul>
</div>
