<?php
/* Template Name: Date: Titan Framework */

get_header();

/**
    First Admin panel
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

// 2. Get the value via ID using getOption function
$aa_date_option_val = $titan->getOption( 'aa_date_option' );


?>

	<div class="aa_content">
		<hr />
		<?php


			//print_r( $aa_date_option_val );

			//echo
			$epoch = $aa_date_option_val;
			echo date('r', $epoch); // output as RFC 2822 date - returns local time - For more read http://goo.gl/g9tZLi

		 ?>
		<hr />
	</div>
	<!-- /.aa_content -->



<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
