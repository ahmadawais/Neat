<?php
/* Template Name: Titan Framework */

get_header(); ?>

	<div class="aa_wrap">

		<h1><?php the_title( ); ?></h1>

		<div class="aa_content">

			<?php

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
			$titan = TitanFramework::getInstance( 'neat' );

			// 2. Get the value via ID using getOption function
			$aa_txt_val = $titan->getOption( 'aa_txt' );

			echo $aa_txt_val; // Print the value saved in aa_txt option

			// Let's use this value in HTML
			 ?>

			<h3><?php echo $aa_txt_val; ?></h3>


		</div>
		<!-- /.aa_content -->

	</div>
	<!-- /.aa_wrap -->


<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
