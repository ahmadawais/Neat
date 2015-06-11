<?php
/**
 * The header for our theme.
 *
 */

/**
    Customizer Options
 */
/**
 *
 * Getting option values
 *
 * We will get the values of options we created in the options-init.php file here. Two
 * steps really:
 * 				1. Get the titan framework instance and save it to a variable
 * 				2. Get the value via ID using getOption function
 *
 */

// 1. Get the titan framework instance and save it to a variable
$titan = TitanFramework::getInstance( 'neat' ); // we will initialize $titan only once for every file where we use it.

// Body bg color
$aa_sec_body_bg_clr_val = $titan->getOption( 'aa_sec_body_bg_clr' );

// Body txt color
$aa_sec_body_txt_clr_val = $titan->getOption( 'aa_sec_body_txt_clr' );

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<style>
/* ----------------------------------------------------------------------------
 * CSS values from customizer
 * ------------------------------------------------------------------------- */
	body{
		background: <?php echo $aa_sec_body_bg_clr_val; ?> !important;
		color     : <?php echo $aa_sec_body_txt_clr_val; ?> !important;
	}
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	a,
	p{
		color     : <?php echo $aa_sec_body_txt_clr_val; ?> !important;
	}
</style>
</head>



<body <?php body_class(); ?>>

	<header class="aa_navigation">

		<nav class="aa_nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
		<!-- /.aa_nav -->

	</header>
	<!-- /.aa_navigation -->

