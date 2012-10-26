<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
				<input type="button" value="Очистить">
				<input type="text">
				<div class="search_ico"></div>
			</div>
		</div>

		<!-- Content -->
		<div id="content">

			<?php print render($page['content']); ?>

			<div>
					   <?php print render(module_invoke('menu', 'block_view', 'devel')); ?>
            </div>
		</div>
		<!-- End Content -->

	</div>
	<!-- End Wrapper -->

</body>
</html>
