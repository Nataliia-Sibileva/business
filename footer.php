<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business
 */

?>

	<footer>
	<div class="header-top">
		<div class="header-logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo-black.png" alt="Logo">
			</a>
		</div>

		<div class="header-nav">
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
			<a href="#" class="btn-color">Call back</a>
		</div>
		
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
