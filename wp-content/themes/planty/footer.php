<?php

/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

</main><!-- #main -->

<?php do_action('ocean_after_main'); ?>

<?php do_action('ocean_before_footer'); ?>
<footer class="foot">
	<?php
	wp_nav_menu([
		'theme_location' => 'footer',
		'container' => 'false',
		//ajout de la class "ul"
		'menu_class' => 'menu-footer'
	]);
	?>
</footer>

<?php
// Elementor `footer` location.
if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('footer')) {
?>

	<?php do_action('ocean_footer'); ?>

<?php } ?>

<?php do_action('ocean_after_footer'); ?>

</div><!-- #wrap -->

<?php do_action('ocean_after_wrap'); ?>

</div><!-- #outer-wrap -->

<?php do_action('ocean_after_outer_wrap'); ?>

<?php wp_footer(); ?>

</body>

</html>