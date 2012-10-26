

<div class="user_info"><!--user_info starts -->

	<div class="detail_info left"><!--detail_info left starts -->
	
		<div class="left" style="width: 170px; height: 260px;"><!-- left starts -->
			<a class="user_name left" href="#">
			<?php $account = menu_get_object('user'); 
         print check_plain($account->name) ?>
         </a>
         
			<div>
			   <?php print render($user_profile['user_picture']) ?>
         </div>
         
			<div class="user_mail_ico left">
			   <a href="#">
				<img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/user_mail_ico.png"/>
				<b>124</b>
				</a>
			</div><!-- user_mail_ico left ends -->
			
			<div class="user_id_ico left"><!-- user_id_ico left starts -->
		   	<a href="#">
				<img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/user_id_ico.png"/>
				<b>18</b>
				</a>
			</div><!-- user_id_ico left ends -->
			
			<div class="user_send_ico left"><!-- user_send_ico left starts -->
				<a href="#">
				<img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/user_send_ico.png"/>
			   </a>
			</div><!-- user_send_ico left ends -->
			
			<div class="mblog_ico left"><!-- mblog_ico left starts -->
				<img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/m_page.png"/> 
				<a class="left" href="">Микроблог</a>
			</div><!-- mblog_ico left ends -->
			
		</div><!-- left ends -->
		
		<div class="left" style="border-right: solid 1px #d6d6d6; width: 120px; margin: 30px 0 0 0;"><!-- left starts -->
			<a style="color: #0397cd;" href="">Мудрец</a>
			<p>Специалист по Экономике, Политологии, Право, Философия</p>
			<a href=""><?php print render($account->field_age['und'][0]['value']) ?></a>
			<a href=""><?php print render($account->field_country['und'][0]['value']) ?></a>
			<a href=""><?php print render($account->field_city['und'][0]['value']) ?></a>
		</div><!-- left ends -->
		
	</div><!--detail_info left ends -->
	
	<div class="table_rating left"><!-- table_rating left starts -->
		<table>
			<tr>
			   <td><b>Категории</b></td>
			   <td><b>Статус</b></td>
			   <td><b>Статьи</b></td>
			   <td><b>Читают</b></td>
			   <td><b>Читатели</b></td>
			   </tr>
			<tr>
				<td>Все</td>
				<td>Мудрец</td>
				<td>183</td>
				<td>157</td>
				<td>483</td>
			</tr>		
			<tr>
				<td>Политика</td>
				<td>Эксперт</td>
				<td><?php print views_embed_view('statji_politika'); ?></td>
				<td>23</td>
				<td><?php print views_embed_view('chitateli_politika'); ?></td>
			</tr>	
			<tr>
				<td>Экономика</td>
				<td>Эксперт</td>
				<td><?php print views_embed_view('statji_ekonomika'); ?></td>
				<td>233</td>
				<td><?php print views_embed_view('ekonomika'); ?></td>
			</tr>
			<tr>
				<td>Право</td>
				<td>Эксперт</td>
				<td><?php print views_embed_view('statji_pravo'); ?></td>
				<td>754</td>
				<td><?php print views_embed_view('pravo'); ?></td>
			</tr>
			<tr>
				<td>Философия</td>
				<td>Эксперт</td>
			   <td><?php print views_embed_view('statji_filosofija'); ?></td>
				<td>34</td>
				<td><?php print views_embed_view('filosofija'); ?></td>
			</tr>		
			<tr>
				<td>Спорт</td>
				<td></td>
				<td></td>
				<td>43</td>
				<td></td>
			</tr>	
			<tr>
				<td>Религия</td>
				<td></td>
				<td></td>
				<td>12</td>
				<td></td>
			</tr>
			<tr>
				<td>Наука</td>
				<td></td>
				<td></td>
				<td>32</td>
				<td></td>
			</tr>	
		</table>
	</div><!-- table_rating left ends -->
</div><!--user_info ens -->

<div style="margin: 0 0 -16px 100px;"><!--user picture starts -->
   <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/s.png"/>
</div><!--user picture ends -->

<div class="user_status left"><!--user_status left starts -->
	<p>Я Мудрец! Специалист по Экономике, Политологии, Права Философии. И мне 21 лет проживаю в Кыргызстане
потрясающий город Бишкек. Заходите на мои блоги буду рад каждому читателю :) </p>
</div><!--user_status left ends -->

<div id="recent_blog_entries">
   <span>Recent blog entries:</span>
	<?php 	
      print views_embed_view('recent_blog_entries'); 
	?>
</div>


