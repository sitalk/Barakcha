<div id="header">
	<div class="header_menu">
		<div class="menu_left">
			<div class="_item"><image src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/home_icon.png" class="header_icon"/><a href="">Главная</a></div>
			<div class="_item"><image src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/file_icon.png" class="header_icon"/><a href="">Файлы</a></div>
			<div class="_item"><image src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/blog_icon.png" class="header_icon"/><a href="">Блоги</a></div>
			<div class="_item"><image src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/discus_icon.png" class="header_icon"/><a href="">Опросы</a></div>
		</div>
		<div class="menu_right">
			<div class="right"><?php global $user;
            if ($user->uid)
            { 
            ?>
               <div class="logout_link">
               <?php print l(t('Выход'), 'user/logout'); ?>
               </div>
            <?php 
            }
            ?></div>
			<div class="right" style="height: 35px; margin-right: 10px; padding-right: 10px; border-right: solid 1px #d6d6d6;"><a href="">Алымбек Сариев</a></div>
		</div>
	</div>
</div>
	<div id="wrapper">
		<div class="m_header">
			<div class="logo"><a href=""><image src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/logo.png"/></a></div>
			<div class="search right">
				<div class="search_ico"></div>
				<input type="text" class="search_text"/>
				<input type="button" class="search_buton" value="Очистить"/>
			</div>
		</div>
		<div id="main">
			<div id="first_sidebar"><!-- first sidebar begins -->
				<div class="first_menu left"><!-- first_menu left begins -->
					<div class="_item left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/h_page.png" class="left"/><a class="left" href="">Главная</a></div>
					<div class="_item left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/m_page.png" class="left"/><a class="left" href="">Моя страница</a></div>
					<div class="_item left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/r_article.png" class="left"/><a class="left" href="">Случайная статья</a></div>
					<div class="_item left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/w_article.png" class="left"/><a class="left" href="">Написать статью</a></div>
					<div class="_item left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/s_page.png" class="left"/><a class="left" href="">Статистика</a></div>
					<div class="_item left"><img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/st_page.png" class="left"/><a class="left" href="">Настройки</a></div>
				</div> <!-- first_menu left ends -->
				<div class="second_menu left"><!-- second_menu left begins -->
					<div class="left" style="margin: 20px 0 0 30px; width: 150px;"><!-- left begins -->
						<div class="_item left">
						   <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/ms_ico.png" class="left"/>
						   <a class="left" href="">Мои статьи</a>
						</div>
						<div class="_item left">
						   <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/lenta_ico.png" class="left"/>
						   <a class="left" href="">Лента</a>
		            </div>
<!-- Верстка выпадающего меню -->
							<ul class="inner_menu left">
								<li><a href="">Все</a></li>
								<li><a href="">Политология</a></li>
								<li><a href="">Экономика</a></li>
								<li><a href="">Философия</a></li>
								<li><a href="">Спорт</a></li>
								<li><a href="">Религия</a></li>
								<li><a href="">Наука</a></li>
							</ul>
						<div class="_item left">
					      <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/reiting_ico.png" class="left"/>
					      <a class="left" href="">Рейтинг</a>
				      </div>					
					</div><!-- left ends -->
				</div><!-- second_menu left ends -->
				<div>
					   <?php print render(module_invoke('menu', 'block_view', 'devel')); ?>
            </div>
			</div><!-- first sidebar ends -->
			
			<div id="_content">  <!-- content begins -->

         <?php 
			$block = block_load('quicktabs', 'views_lenta_follow');
 
$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));       
print $output; 

?>

			<div><!-- users scroller begins-->
	      <?php print views_embed_view('users_scroller'); ?>
         </div><!-- users scroller ends-->       
          
				
			<div> <!-- login form begins -->
         
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
					

				</div> <!-- login form ends -->

				
				</div> <!-- content ends -->
			<div id="second_sidebar"><!-- second_sidebar begins -->
				<div class="reklama left">
					<div class="_header left">
					   <img class="left" src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/reklama.png"/>
					   <a class="left" href="">Реклама</a>
					</div>
					
					<div class="_item">
						<a href="">Арома и Футбол</a>
						<img src="images/rph1.png"/>
						<p>В праздничные дни скидка 50% всем гостям во всех сетях Aroma Pizza!!!</p>
					</div>
					<div class="_item">
						<a href="">Арома и Футбол</a>
						<img src="images/rph1.png"/>
						<p>В праздничные дни скидка 50% всем гостям во всех сетях Aroma Pizza!!!</p>
					</div>
						
				</div><!-- second_sidebar ends -->
			</div>	
		</div>
	</div>

