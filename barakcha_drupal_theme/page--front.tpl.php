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
			<li style=" width: 370px;"><a class="right" href="<?php global $user, $base_path; print $base_path ?>user/<?php $user->uid; ?>"><div class="img_user"></div><div class="user_name right">
<?php global $user; 
$user_fields = user_load($user->uid);
$user_name = $user_fields->name;
print  $user_name;  ?>
</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/menu_border.png">
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
		<div id="menu_wrapper">
			<div id="main_menu">
				<ul>
					<li class="active"><a href=""><div class="img_home"></div><p>Домой</p></a></li>
					<li><a href="<?php global $user, $base_path; print $base_path."user/".$user->uid; ?>"><div class="img_profile"></div><p>Профиль</p></a></li>
					<li><a href=""><div class="img_write"></div><p>Написать</p></a></li>
					<li><a href=""><div class="img_rand"></div><p>Случайная</p></a></li>
					<li><a href=""><div class="img_stat"></div><p>Статистика</p></a></li>
					<li><a href="<?php global $base_path; print $base_path; ?>user/<?php global $user; print $user->uid; ?>/edit"><div class="img_settings"></div><p>Настройки</p></a></li>
				</ul>
			</div>
		</div>
		<div id="header">
			<div class="logo left"><a href="#"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/logo.png"></a></div>
			<div class="search right">
				<!-- <input type="reset" value="Очистить"> -->
				<?php 
					$block = block_load('finder', 'finder_search');
					$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));       
					print $output; 
				?>
				<!-- <input type="text"> -->
				<div class="search_ico"></div>
			</div>
		</div>
		<!-- Content -->
			<div id="content">
			<!-- Main content -->
			<div id="content_inner">
			 <div class="user_info right"><!-- User info -->
			 	<div class="bg">
			 		<div class="user_photo left"><a href=""><?php

  print views_embed_view('current_user_picture');
 
?>
</a></div><!-- User Photo -->
			 	</div>
			 	<div class="details left">
			 		<a href="#" class="name left"><?php global $user; $user_fields = user_load($user->uid);
                                                    $user_name = $user_fields->name;
                                                     print  $user_name;  
?></a>
			 		<a href="#" class="status left">Эксперт по политологии, экономике и философии</a>
			 	</div>
			 </div><!-- User info end -->

			 <div class="users_top left">
			 	<div class="_header left">Популярные</div>
			 	<div class="_body left">
			 	<div class="users_carousel left">
				 	 <?php print views_embed_view('users_scroller'); ?>
			 	</div>
			 	</div>
			</div>
				<div class="ribbon left">
					<div id="ribbon_h" class="_header left">
					<?php 
						$block = block_load('quicktabs', 'views_lenta_follow'); 
						$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));       
						print $output; 
					?>
					</div>
					<?php 
            			global $user;
            			if (!$user->uid) 
            			{
            		?>
            		<div style=" clear: both;"></div>
               		<div class="logout_link">
               		<?php
               			print render(drupal_get_form('user_login_block'));
               		?>
               		</div>
             		<?php } ?>
				</div>
			</div>
			<!-- End of main content -->

		</div>
		<!-- End Content -->

	</div>
	<!-- End Wrapper -->

</body>
</html>
