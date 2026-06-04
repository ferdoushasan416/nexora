<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nexora
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header layout-padding">
		<div class="header-inline">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
					<img src="<?php the_field('site_logo', 'option'); ?>" alt="">
				</a>
			 </div>
			  <div class="menu-trigger d-block d-lg-none">
				 <span></span>
				 <span></span>
				 <span></span>
		      </div>
			   <!-- Menu Item -->
			     <?php
					  wp_nav_menu( array(
						'theme_location'    => 'mainMenu',
						'container'         => 'div',
						'container_class'   => 'main-menu d-none d-lg-block',
				       ) );
				  ?>
			<!-- Header Right Item -->
			 <div class="header-right d-none d-lg-block">
				  <div class="header-btns">

					<?php 
					$sign_in_btn = get_field('sign_in_btn', 'option');
					$get_started_btn = get_field('get_started_btn', 'option');
					?>

					<?php if($sign_in_btn): ?>
						<div class="sign-in-btn">
							<a href="<?php echo esc_url($sign_in_btn['url']); ?>"
							target="<?php echo esc_attr($sign_in_btn['target'] ?: '_self'); ?>">
								<?php echo esc_html($sign_in_btn['title']); ?>
							</a>
						</div>
					<?php endif; ?>

					<?php if($get_started_btn): ?>
						<div class="get-started-btn">
							<a href="<?php echo esc_url($get_started_btn['url']); ?>"
							target="<?php echo esc_attr($get_started_btn['target'] ?: '_self'); ?>"
							class="site-btn">
								<?php echo esc_html($get_started_btn['title']); ?>
							</a>
						</div>
					<?php endif; ?>

				  </div>
		    </div>
	</header><!-- #masthead -->


	<!-- Hamburger Menu Start -->
	<div class="hamburger-menu-wrapper d-block d-lg-none">
		<div class="hamburger-menu-inner">
			<div class="menu-close">
				 <img src="<?php echo get_template_directory_uri(); ?>/assets/svgs/close.svg" alt="">
			</div>
			<div class="hamburger-menu">
				  <?php
					wp_nav_menu( array(
						'theme_location'    => 'mainMenu',
						'container'         => 'div',
						'container_class'   => 'mobile-menu',
				   ) );
					?>
			</div>
			<div class="hamburger-footer">
				 <div class="header-btns">

					<?php 
					$sign_in_btn = get_field('sign_in_btn', 'option');
					$get_started_btn = get_field('get_started_btn', 'option');
					?>

					<?php if($sign_in_btn): ?>
						<div class="sign-in-btn">
							<a href="<?php echo esc_url($sign_in_btn['url']); ?>"
							target="<?php echo esc_attr($sign_in_btn['target'] ?: '_self'); ?>">
								<?php echo esc_html($sign_in_btn['title']); ?>
							</a>
						</div>
					<?php endif; ?>

					<?php if($get_started_btn): ?>
						<div class="get-started-btn">
							<a href="<?php echo esc_url($get_started_btn['url']); ?>"
							target="<?php echo esc_attr($get_started_btn['target'] ?: '_self'); ?>"
							class="site-btn">
								<?php echo esc_html($get_started_btn['title']); ?>
							</a>
						</div>
					<?php endif; ?>

				  </div>
			</div>
		</div> 
	</div>
<!-- Hamburger Menu End -->

