<?php
/**
 *
 * Creating metabox options via Titan Framework
 *
 * Getting started      : http://www.titanframework.net/get-started/
 * Metabox              : http://www.titanframework.net/meta-box/
 * Options              : http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 */


/**
 *
 * tf_create_options is the hook used to create options
 *
 */
add_action( 'tf_create_options', 'aa_metabox_options' );

function aa_metabox_options() {

    // Initialize Titan with your theme name
    $titan = TitanFramework::getInstance( 'neat' );

    /**
        First metabox
     */

    /**
     *
     * Create metabox called $aa_metbox
     *
     * This will create a meta box named ‘Metabox Options’ on the bottom of screen when editing pages.
     */
    $aa_metbox = $titan->createMetaBox( array(

        // Name the options menu
        'name' => 'Metabox Options',

        // Metbox will be attached to all the post types defined here
        'post_type' => array( 'page', 'post', 'my_custom_post_type' ), // Can be a string or array

    ) );


    /**
     * Create the options for metabox
     *
     * Now we will create options for our metabox that we just created called $aa_metbox
     *
     */
    $aa_metbox->createOption( array(

        'id' => 'aa_mb_txt', // The ID which will be used to get the value of this option
        'type' => 'text', // Type of option we are creating
        'name' => 'My Text Option', // Name of the option which will be displayed in the admin panel
        'desc' => 'This is our option' // Description of the option which will be displayed in the admin panel

    ) );


}
