<?php
/* Template Name: Titan Framework */

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
$aa_txt_val = $titan->getOption( 'aa_txt' );

/**
    Second Admin panel
 */

// Value of first tab text box.
$aa_txt_in_tab1_panel2_val = $titan->getOption( 'aa_txt_in_tab1_panel2' );

// Value of second tab textarea.
$aa_txtarea_in_tab2_panel2_val = $titan->getOption( 'aa_txtarea_in_tab2_panel2' );


/**
    First metabox
 */

/**
 *
 * Value of first tab text box.
 *
 * Notice the use of get_the_ID(). It is because metabox is created for all
 * the post types we defined. TO get the value of a metabox option for a specific page/post
 * we need to give getOptions() function the ID of our post/page. Which is done like this.
 *
 */
$aa_mb_txt_val = $titan->getOption( 'aa_mb_txt', get_the_ID() );

?>

	<div class="aa_wrap">

		<h1><?php the_title( ); ?></h1>

		<div class="aa_content">

			<?php
			/**
			    First Admin panel options
			 */
			echo $aa_txt_val; // Print the value saved in aa_txt option

			// Let's use this value in HTML
			 ?>

			<h3><?php echo $aa_txt_val; ?></h3>


			<?php
			/**
			    Second Admin panel options
			 */

			// Let's use this value in HTML
			 ?>

			 <div>
			 	Value of first tab text box is : <?php echo $aa_txt_in_tab1_panel2_val; ?>
			 </div>

			<div>
				Value of second tab textarea is : <?php echo $aa_txtarea_in_tab2_panel2_val; ?>
			</div>



			<?php
			/**
			    First metabox option
			 */

			// Let's use this value in HTML
			 ?>

			 <div>The value of metabox option txt for this page is: <?php echo $aa_mb_txt_val; ?></div>
		</div>
		<!-- /.aa_content -->

	</div>
	<!-- /.aa_wrap -->


<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
