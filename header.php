<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="http://kenwheeler.github.io/slick/slick/slick-theme.css">

	
	

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<div class="header-top">
		<div class="header-logo">
			<?php the_custom_logo();?>

			
		</div>

		<button class="toggle"></button>

		<div class="header-nav nav-mob">
			<nav>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav>
		</div>

		<div class="header-contacts">
			<a href="tel:380440000000">+38 (044) 000-00-00</a>
			<a href="#" class="btn">Leave a request</a>
		</div>
		
	</div>

	<div class="header-main">
		<div class="wrapper">
			<div class="header-main__text">
				<h2>Let's create</h2>
				<img src="<?php echo get_template_directory_uri() ?>/img/h1.svg" alt="BUSINESS PLAN">
				<p>Organization assistance business will save you have time and nerves</p>

				<a href="#" class="btn-color">Create</a>
			</div>

			

			<?php 
			$kod = get_field('shortcode');
			echo do_shortcode('' . $kod . ''); ?>
		</div>
	</div>
</header>

