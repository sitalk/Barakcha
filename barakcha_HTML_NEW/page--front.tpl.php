﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>barakcha</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.caroufredsel-5.6.4-packed.js"></script>
</head>
<body>
<script type="text/javascript">
	$(function(){
		$('#foo').carouFredSel({
			prev: '#prev',
			next: '#next',
			responsive: true,
			scroll: 2,
			items: {
				visible: {
					min: 9,
					max: 9
				}
			}
		});
	});
</script>
	<!-- Header menu -->
	<div id="header_menu">
		<div style=" width: 1020px; height: 50px; margin: 0 auto;">
		<ul>
			<li><a href=""><div class="img_pies"></div><div class="_link">Мир</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>images/menu_border.png">
			<li><a href=""><div class="img_files"></div><div class="_link">Файлы</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>images/menu_border.png">
			<li class="active"><a href=""><div class="img_blogs"></div><div class="_link">Блоги</div></a></li><img class="img_border left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>images/menu_border.png">
			<li><a href=""><div class="img_diskus"></div><div class="_link">Опросы</div></a></li><img class="img_border left" src="images/menu_border.png">
			<li style=" width: 370px;"><a class="right" href=""><div class="img_user"></div><div class="user_name right">Алымбек Сариев</div></a></li><img class="img_border left" src="images/menu_border.png">
			<li style=" width: 70px;"><a class="right" href=""><div class="_link"><?php global $user;
            if ($user->uid){ ?>          
               <?php print l(t('Выход'), 'user/logout'); ?>            
            <?php } ?></div></a></li>
		</ul>
		</div>
	</div>
	<!-- End of header menu -->

	<!-- Wrapper -->
	<div id="wrapper">
		<div id="header">
			<div class="logo left"><a href="#"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>images/logo.png"></a></div>
			<div class="search right">
								 <?php 
			$block = block_load('finder', 'finder_search');
 
$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));       
print $output; 

?>
				<div class="search_ico"></div>
			</div>
		</div>

		<!-- Content -->
		<div id="content">

			<!-- Main menu -->
			<div id="main_menu">
				<div class="left_menu_item left"></div>
				<ul class="left">
					<li class="active"><a href=""><div class="img_home"></div><div class="_link">Главная</div></a></li>
					<li><a href=""><div class="img_profile"></div><div class="_link">Профиль</div></a></li>
					<li><a href=""><div class="img_write"></div><div class="_link">Написать</div></a></li>
					<li><a href=""><div class="img_rand"></div><div class="_link">Случайная</div></a></li>
					<li><a href=""><div class="img_stat"></div><div class="_link">Статистика</div></a></li>
					<li><a href=""><div class="img_set"></div><div class="_link">Настройки</div></a></li>
				</ul>
				<div class="right_menu_item left"></div>
			</div>
			<!-- End of main menu -->

			<!-- Main content -->
			<div id="content_inner">
			 <div class="user_info right"><!-- User info -->
			 	<div class="bg">
			 		<div class="user_photo left"><a href=""><?php print render($user_profile['user_picture']) ?></a></div><!-- User Photo -->
			 	</div>
			 	<div class="details left">
			 		<a href="#" class="name left"><?php $account = menu_get_object('user'); 
         print check_plain($account->name) ?></a>
			 		<a href="#" class="status left">Эксперт по политологии, экономике и философии</a>
			 	</div>
			 </div><!-- User info end -->
			 <div class="users_top left">
			 	<div class="_header left">Популярные</div>
			 	<div class="_body left">
			 	<div class="users_carousel">
				 	 <?php print views_embed_view('users_scroller'); ?>
			 	</div>
			 	<a id="prev" href=""></a>
			 	<a id="next" href=""></a>
			 	</div>
			</div>
				<div class="ribbon left">
					<div class="_header left">
					<?php 
			$block = block_load('quicktabs', 'views_lenta_follow'); 
$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));       
print $output; 

?>
					</div>
					<div class="_body left">
						<div class="item left">
							<div class="photo left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>images/lenta/photo.png"></div>
							<div class="_header left"><a href="">Бунтующий человек</a></div>
							<div class="_text left">На сегоднящний день политика США чем то напоминает тематику международного гегемонию в международных отношениях. Например любое......</div>
						</div>
						<div class="item left">
							<div class="photo left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>images/lenta/photo.png"></div>
							<div class="_header left"><a href="">Бунтующий человек</a></div>
							<div class="_text left">На сегоднящний день политика США чем то напоминает тематику международного гегемонию в международных отношениях. Например любое......</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End of main content -->
 <?php 
            global $user;
            if (!$user->uid) 
            {
            ?>
               <div class="logout_link">
               <?php
               print render(drupal_get_form('user_login_block'));
               ?>
               </div>
             <?php
             }
             ?>
		</div>
		<!-- End Content -->

	</div>
	<!-- End Wrapper -->

</body>
</html>
