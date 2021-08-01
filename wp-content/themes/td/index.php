<!DOCTYPE html>
<html lang="ru" style="margin-top: 0 !important;">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/svg" href="<?php echo get_template_directory_uri(); ?>/img/logo-mini.svg" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>такое digital</title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/top.svg" alt="top" class="menu-bkg">
			<div class="menu-container">
				<div class="burger">
					<div class="burger-line"></div>
					<div class="burger-line"></div>
				</div>
				<nav>
					<div class="close-menu">
						<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="close">
					</div>
						<?php 
					wp_nav_menu( [
       'container'       => false 
					]);
				 ?>
				</nav>
				<div class="top-social">
					<a href="#" class="icon-link">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tg-icon.svg" alt="icon" class="icon">
					</a>
					<a href="tel:84991136912" class="link">+7 499 113 69 12</a>
				</div>
			</div>
			<?php
if ( have_posts() ) : 
  query_posts('category_name=process');  
  while (have_posts()) : the_post();  
?>
			<div class="header-container">
				<div class="header-text-container">
					<?php the_content(); ?>
				</div>
				<div class="logo-cont">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" class="logo">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/first.svg" alt="bloob" class="header-bloob">
			</div>
			<div class="cta">
				оставить заявку
			</div>
				<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
		</div>
	</header>
	<main>
		<div class="container">
			<section class="services" id="service">
				<img src="<?php echo get_template_directory_uri(); ?>/img/color-logo.png" alt="logo" class="service-img">
				<?php
if ( have_posts() ) : 
  query_posts('category_name=services');  
  while (have_posts()) : the_post();  
?>
				<h2 class="main-header"><?php the_title(); ?></h2>
				<div class="services-grid">
					<?php the_content(); ?>
				</div>
				<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=social');  
  while (have_posts()) : the_post();  
?>
				<div class="social-container">
					<div class="social-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="icon" class="social-img">
						<div class="social-text">
							<div class="social-title main-header">instagram</div>
							<div class="social-subtitle main-text">post<br> stories<br> link profile</div>
						</div>
					</div>
					<div class="social-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt="icon" class="social-img">
						<div class="social-text">
							<div class="social-title main-header">youtube</div>
							<div class="social-subtitle main-text">Интеграция бренда/продукта Эксклюзивное видео/Спецпроект Прероллы/мидроллы/построллы Продвижение Youtube-канала бренда</div>
						</div>
					</div>
					<div class="social-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt="icon" class="social-img">
						<div class="social-text">
							<div class="social-title main-header">telegram</div>
							<div class="social-subtitle main-text">посевы</div>
						</div>
					</div>
					<div class="social-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="icon" class="social-img">
						<div class="social-text">
							<div class="social-title main-header">twitter</div>
							<div class="social-subtitle main-text">re/post</div>
						</div>
					</div>
					<div class="social-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitch.svg" alt="icon" class="social-img">
						<div class="social-text">
							<div class="social-title main-header">twitch</div>
							<div class="social-subtitle main-text">Спонсорство стрима Эксклюзивный стрим Интеграция бренда/ продукта</div>
						</div>
					</div>
				</div>
					<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			</section>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=processMain');  
  while (have_posts()) : the_post();  
?>
			<section class="process" id="process">
				<h2 class="main-header"><?php the_title(); ?></h2>
				<?php the_content(); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/process.png" alt="process" class="process-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/color-logo.png" alt="logo" class="cl">
					<img src="<?php echo get_template_directory_uri(); ?>/img/second.svg" alt="icon" class="process-second">
			</section>
				<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 	 <?php
if ( have_posts() ) : 
  query_posts('category_name=price');  
  while (have_posts()) : the_post();  
?>
			<section class="price" id='price'>
				<div class="top-price">
					<h2 class="main-header"><?php the_title(); ?></h2>
					<div class="main-text top-price-baner">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<div class="price-table">
					<?php the_content(); ?>
				
				</div>
				<div class="bottom-price">
					<div class="main-text ps">p.s.</div>
				<div class="price-bottom-baner main-text">
					Пакеты для instagram и youtube.<br>
     <span class='bold'>для telegram запрашивайте у менеджеров</span>
				</div>
				</div>
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 	<?php
if ( have_posts() ) : 
  query_posts('category_name=form');  
  while (have_posts()) : the_post();  
?>
			<section class="form">
				<h2 class="main-header">оставить заявку</h2>
				<?php echo do_shortcode('[contact-form-7 id="84" title="Клиенты"]'); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/third.svg" alt="icon" class="form-img">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			<?php
if ( have_posts() ) : 
  query_posts('category_name=test');  
  while (have_posts()) : the_post();  
?>
			<section class="test" id="test">
				<div class="test-container">
				<div class="test-text">
				<h2 class="main-header"><?php the_title(); ?></h2>
				<?php the_content(); ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/test.svg" alt="icon" class="test-img">
				</div>
			</section>
			<div class="case">
				<div class="green"><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span></div>
				<div class="black"><span>кейсы</span> <span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span></div>
			</div>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=book24');  
  while (have_posts()) : the_post();  
?>
			<section class="book brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<div class="main-text brand-subtitle"><?php the_excerpt(); ?></div>
				<?php 
					$bookContent = get_the_content();
					$book = explode('<!--tag-->', $bookContent);
					echo $book[0];
				 ?>
				<div class="flex-container">
					<div class="text-cont">
						<?php echo $book[1] ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/book.svg" alt="icon" class="book-img">
				</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/color-logo.png" alt="logo" class="book-bkg">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			  <?php
if ( have_posts() ) : 
  query_posts('category_name=gf');  
  while (have_posts()) : the_post();  
?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slash.svg" alt="slash" class="slash">
			<section class="gf brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="main-text brand-subtitle"><?php echo get_the_excerpt(); ?></p>
				<?php the_content(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/gf.svg" alt="gf" class="gf-img">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=size');  
  while (have_posts()) : the_post();  
?>
			<section class="size brand-section" id="size"> 
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
				<?php the_content(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/size.svg" alt="icon" class="size-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/fourth.svg" alt="bloob" class="size-bloob">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			  <?php
if ( have_posts() ) : 
  query_posts('category_name=skill');  
  while (have_posts()) : the_post();  
?>
			<div class="case">
				<div class="green"><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span></div>
				<div class="black"><span>кейсы</span> <span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span></div>
			</div>
			<section class="skillbox brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
				<?php 
					$skillContent = get_the_content();
					$skill = explode('<!--tag-->', $skillContent);
					echo $skill[0];
				 ?>
				
					<div class="skill-cont">
						<div class="skill-text">
							<?php echo $skill[1] ?>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/skillbox.svg" alt="skill" class="skill-img">
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/color-logo.png" alt="logo" class="skill-bloob">
					<img src="<?php echo get_template_directory_uri(); ?>/img/first.svg" alt="icon" class="skill-bloob-second">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=wow');  
  while (have_posts()) : the_post();  
?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slash.svg" alt="slash" class="slash">
			<section class="wow brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="main-text brand-subtitle"><?php echo get_the_excerpt(); ?></p>
				<?php the_content(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/wow.svg" alt="wow" class="wow-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/second.svg" alt="bloob" class="wow-bloob">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=image');  
  while (have_posts()) : the_post();  
?>
			<section class="brand-section image" id="image">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="main-text brand-subtitle"><?php echo get_the_excerpt(); ?></p>
				<?php the_content(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/image.svg" alt="icon" class="image-img">
			</section>
			<div class="case">
				<div class="green"><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span></div>
				<div class="black"><span>кейсы</span> <span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span></div>
			</div>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=ritual');  
  while (have_posts()) : the_post();  
?>
			<section class="ritual brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
				<?php the_content(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ritual.svg" alt="icon" class="ritual-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/color-logo.png" alt="logo" class="ritual-bloob">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=trigan');  
  while (have_posts()) : the_post();  
?>
			<section class="trigan brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
				<?php the_content(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/trigan.svg" alt="icon" class="trigan-img">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=new');  
  while (have_posts()) : the_post();  
?>
			<section class="new brand-section" id='new'>
				<h2 class="main-header"><?php the_title(); ?></h2>
				<div class="flex-container">
					<div class="text-cont">
						<?php the_content(); ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/new.png" alt="icon" class="new-img">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/third.svg" alt="bloob" class="new-bloob">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=foresto');  
  while (have_posts()) : the_post();  
?>
			<div class="case">
				<div class="green"><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span><span>ысйек</span></div>
				<div class="black"><span>кейсы</span> <span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span><span>кейсы</span></div>
			</div>
			<section class="foresto brand-section">	
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
				<?php 
					$forestoContent = get_the_content();
					$foresto = explode('<!--tag-->', $forestoContent);
					echo $foresto[0];
				 ?>
				
				<div class="flex-container">
					<div class="text-cont">
						<?php echo $foresto[1]; ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/foresto.png" alt="img" class="foresto-img">
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/color-logo.png" alt="logo" class="foresto-bloob">
				<img src="<?php echo get_template_directory_uri(); ?>/img/second.svg" alt="sec" class="foresto-bloob-second">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=farmerama');  
  while (have_posts()) : the_post();  
?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slash.svg" alt="slash" class="slash">
				<section class="farmerama brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
				<?php 
					$farmeramaContent = get_the_content();
					$farmerama = explode('<!--tag-->', $farmeramaContent);
					echo $farmerama[0];
				 ?>
				
				<div class="flex-container">
					<div class="text-cont">
						<?php echo $farmerama[1]; ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/farmerama.svg" alt="icon" class="farmerama-img">
				</div>
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=decathlon');  
  while (have_posts()) : the_post();  
?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slash.svg" alt="slash" class="slash">
			<section class="decathlon brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
					<?php the_content(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/scoots.png" alt="icon" class="decathlon-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/decathlon-bkg.svg" alt="bloob" class="decathlon-bloob">
				<img src="<?php echo get_template_directory_uri(); ?>/img/fifth.svg" alt="bloob" class="decathlon-bloob-second">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=kiki');  
  while (have_posts()) : the_post();  
?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/slash.svg" alt="slash" class="slash">
			<section class="kiki brand-section">
				<h2 class="brand main-header"><?php the_title(); ?></h2>
				<p class="brand-subtitle main-text"><?php echo get_the_excerpt(); ?></p>
				<?php 
					$kikiContent = get_the_content();
					$kiki = explode('<!--tag-->', $kikiContent);
					echo $kiki[0];
				 ?>
				<div class="flex-container">
					<div class="text-cont">
						<?php echo $kiki[1]; ?>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/img/kiki.svg" alt="kiki" class="kiki-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/color-logo.png" alt="logo" class="kiki-bloob">
				</div>
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=client');  
  while (have_posts()) : the_post();  
?>
			<section class="client">
				<h2 class="main-header"><?php the_title(); ?></h2>
				<div class="client-grid">
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand1.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand2.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand3.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand4.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand5.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand6.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand7.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand8.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand9.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand10.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand11.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand12.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand13.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand14.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand15.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand16.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand17.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand18.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand19.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand20.svg" alt="client" class="client-img"></div>
					<div class="client-item"><img src="<?php echo get_template_directory_uri(); ?>/img/brand21.svg" alt="client" class="client-img"></div>
				</div>
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
			 <?php
if ( have_posts() ) : 
  query_posts('category_name=form');  
  while (have_posts()) : the_post();  
?>
				<section class="form">
				<h2 class="main-header">оставить заявку</h2>
				<?php echo do_shortcode('[contact-form-7 id="84" title="Клиенты"]'); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/third.svg" alt="icon" class="form-img">
			</section>
			<?php 
	endwhile;  
endif;
wp_reset_query(); 
			 ?>
		</div>
	</main>
	<footer>
		<div class="container">
			<nav>
				<?php 
						wp_nav_menu( [
							'theme_location'  => 'footerMenu',
       'container'       => false 
					]);
				 ?>
			</nav>
			<a href="tel:84991136912" class="link">+7 499 113 69 12</a>
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-mini.svg" alt="logo" class="footer-logo">
		</div>
	</footer>
	<div id="my_modal" class="modal animated  fadeIn">
    <div class="container animated 	fadeInDown">
    	<div class="close">
    		<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="close">
    	</div>
    		<section class="form">
				<h2 class="main-header">оставить заявку</h2>
				<?php echo do_shortcode('[contact-form-7 id="84" title="Клиенты"]'); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/third.svg" alt="icon" class="form-img">
			</section>
		
    </div>
   </div>
   <script>
document.addEventListener('DOMContentLoaded', function() {
 const modal = document.getElementById("my_modal");
 const btn = document.querySelector(".cta");
 var span = document.getElementsByClassName("close")[0];
 const burger = document.querySelector('.burger');
 const menu = document.querySelector('header nav');
 const closeMenu = document.querySelector('.close-menu');
 var menuItem = document.querySelectorAll('header .menu-item:not(:last-child)');
 var menuHide = document.querySelectorAll('.menu-hide-item');
var lm = document.querySelector('header ul:not(.sub-menu) > .menu-item:last-child');

lm.addEventListener('click', function(e){e.preventDefault();});

 burger.addEventListener('click', function(){
 	menu.style.left = 0;
 });

window.addEventListener('scroll', function() {

	if(pageYOffset > 60 && document.body.clientWidth > 1000){
  document.querySelector('header .menu-container').style.cssText = `background: #fff; top: 0px; position: fixed; padding: 15px 0px`;
  if(document.body.clientWidth < 1171){
  	document.querySelector('header .menu-container').style.cssText = `max-width: calc(100% - 30px); background: #fff; top: 0px; position: fixed; padding: 15px 0px`
  }
 } else {
 	document.querySelector('header .menu-container').style.cssText = `background: transparent; top: auto; position: static; padding: 0px;`;
 	if(document.body.clientWidth < 1171){
  	document.querySelector('header .menu-container').style.cssText = `max-width: 100%; `;
  }
 }
	
});

 var menuF = function(param){

 param.forEach(function(item, i, arr){
 	item.addEventListener('click', function(){
 		menu.style.left = -100 + 'vw';
 	});
 });
};

 menuF(menuItem);
 menuF(menuHide);

 closeMenu.addEventListener('click', function(){
 	menu.style.left = -100 + 'vw';
 });

 btn.addEventListener('click', function(){
 	modal.style.display = 'block';
 });

 span.onclick = function () {
    modal.style.display = "none";
 }

 window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
});
   </script>
</body>
</html>