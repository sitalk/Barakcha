		<div id="menu_wrapper">
			<div id="main_menu">
				<ul>
					<li><a href="<?php global $base_path; print $base_path; ?>"><div class="img_home"></div><p>Домой</p></a></li>
					<li class="active"><a href="<?php global $user, $base_path; print $base_path."user/".$user->uid; ?>"><div class="img_profile"></div><p>Профиль</p></a></li>
					<li><a href="<?php global $base_path; print $base_path; ?>node/add/blog"><div class="img_write"></div><p>Написать</p></a></li>
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
			<div id="user_prof">
				<div class="prof_stat left"></div>
				<div class="prof_info left">
					<p class="name"><?php $account = menu_get_object('user'); 
         print check_plain($account->name) ?></p>
					<p>Эксперт по политологии, философии и экономике</p>
				 	<p>21 год</p>
				 	<p>Кыргызстан, г.Бишкек</p>
				 	<p>Международный университет Кыргызстана</p>
				 	<p>Студент 4-го курса</p>
				</div>
			 	<div class="user_info right"><!-- User info -->
			 		<div class="bg">
			 			<div class="user_photo left"><?php   print render($user_profile['user_picture']) ?></div><!-- User Photo -->
			 			<div class="user_icons left">
			 				<div class="icon left"><a href="<?php global $base_path; print $base_path ?>user/<?php global $user; print $user->uid; ?>/messages"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/icons/send.png"><p>21</p></a></div>
			 				<div class="icon left"><a href=""><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/icons/id.png"><p>32</p></a></div>
			 				<div class="icon left"><a href=""><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/icons/mail.png"></a></div>
			 			</div>
			 		</div>
			 	</div><!-- User info end -->
			 	<div class="user_status left">
			 		<p>На сегоднящний день политика США чем то напоминает тематику международного егемонию в международных...</p>
			 	</div>
			 	<div style=" position: absolute; top: 183px; left: 630px;"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/user_status.png"></div>
			</div>
			<div id="user_art">
				<?php print views_embed_view('recent_blog_entries'); ?>
			</div>
		</div>
	</div>

