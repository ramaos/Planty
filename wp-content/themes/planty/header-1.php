<?php

/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr(oceanwp_html_classes()); ?>" <?php language_attributes(); ?>>

<head <?php body_class(); ?> <?php oceanwp_schema_markup('html'); ?>>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup('html'); ?>>


	<header class="sticky-top">
		<div>
			<a href="http://localhost/Planty/"><img src="http://localhost/Planty/wp-content/uploads/2023/07/cropped-Logo-1.png" alt="logo" class="logo-planty"></a>
		</div>
		<?php wp_nav_menu(['theme_location' => 'header', 'container' => 'false', 'menu_class' => 'menu-nav']); ?>
	</header>


	<main id="main" class="site-main clr" <?php oceanwp_schema_markup('main'); ?> role="main">