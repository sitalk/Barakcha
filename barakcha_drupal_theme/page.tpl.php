<html>
<head>
</head>
<body>
<script type="text/javascript">
	(function($){
		$(document).ready(function(){
			$('#main_menu').portamento({wrapper: $('#menu_wrapper')});	
		});
	})(jQuery);
</script>
	<!-- Header menu --> 
	<div id="header_menu">
		<div style=" width: 1020px; height: 50px; margin: 0 auto;">
		<ul>
			<li><a href=""><div class="img_pies"></div><div class="_link">Мир</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/menu_border.png">
			<li><a href=""><div class="img_files"></div><div class="_link">Файлы</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/menu_border.png">
			<li class="active"><a href=""><div class="img_blogs"></div><div class="_link">Блоги</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/menu_border.png">
			<li><a href=""><div class="img_diskus"></div><div class="_link">Опросы</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/menu_border.png">
			<li style=" width: 370px;"><a class="right" href="<?php global $user, $base_path; print $base_path ?>user/<?php $user->uid; ?>"><div class="img_user"></div><div class="user_name right"><?php global $user; $user_fields = user_load($user->uid);                                     $user_name = $user_fields->name;                                            print  $user_name;  
?></div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/menu_border.png">
			<li style=" width: 70px;"><a class="right" href="">
			<div class="_link">
				<?php global $user;
            	if ($user->uid){ ?>          
               	<?php print l(t('Выход'), 'user/logout'); ?>            
            	<?php } ?>
            </div>
        	</a></li>
		</ul>
		</div>
	</div>
	<!-- End of header menu -->

	<!-- Wrapper -->
	<div id="wrapper">
		<?php print render($page['content']); ?>
	</div>
	<!-- End Wrapper -->

</body>
</html>

