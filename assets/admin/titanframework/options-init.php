<?php
/**
 *
 * Creating options via Titan Framework
 *
 * http://www.titanframework.net/get-started/
 *
 */


/**
 *
 * tf_create_options is the hook used to create options
 *
 */
add_action( 'tf_create_options', 'aa_options_creating_function' );

function aa_options_creating_function() {

    // Initialize Titan with your theme name
    $titan = TitanFramework::getInstance( 'neat' );


    // Create admin panel options page called $aa_panel
    $aa_panel = $titan->createAdminPanel( array(

        // Name the options menu
        'name' => 'Neat Options',

    ) );

    /**
     * Create the options
     *
     * Now we will create options for our panel that we just created called $aa_panel
     *
     */
    $aa_panel->createOption( array(

        'id' => 'aa_txt', // The ID which will be used to get the value of this option
        'type' => 'text', // Type of option we are creating
        'name' => 'My Text Option', // Name of the option which will be displayed in the admin panel
        'desc' => 'This is our option' // Description of the option which will be displayed in the admin panel

    ) );


    /**
     * Save button for options
     *
     * When creating admin panel options, use this code to add an option "Save" button
     * since there is no other way for user to save the options.Your users can now save
     * (and reset) the options we just created.
     *
     */
    $aa_panel->createOption( array(

        'type' => 'save'

    ) );


}
