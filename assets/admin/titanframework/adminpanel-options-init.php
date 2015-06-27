<?php
/**
 *
 * Creating admin panel options via Titan Framework
 *
 * Getting started      : http://www.titanframework.net/get-started/
 * Admin Panel          : http://www.titanframework.net/admin-panels/
 * Admin Tabs           : http://www.titanframework.net/admin-tabs/
 * Options              : http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
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

    /**
        First Admin panel
     */

    /**
     *
     * Create admin panel options page called $aa_panel
     *
     * This is a first admin panel and is called by its name i.e. $aa_panel
     */
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
     *
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


    /**
        Second Admin panel
     */


    /**
     *
     * Create second admin panel options page called $aa_panel2
     *
     * This is a second admin panel and is called by its name i.e. $aa_panel2
     */
    $aa_panel2 = $titan->createAdminPanel( array(

        // Name the options menu
        'name' => 'Neat Options 2',

    ) );


    /**
     *
     * Create first tab called $aa_tab1 for second admin panel i.e. $aa_panel2
     *
     */

    $aa_tab1 = $aa_panel2->createTab( array(

        // Name the tab
        'name' => 'Tab 1', // Don't use anything else but alpha numeric name with no characters expect space

    ) );


    // Create options for $aa_panel2 inside the $aa_tab1
    $aa_tab1->createOption( array(

        'id' => 'aa_txt_in_tab1_panel2', // IDs should always be unique. The ID which will be used to get the value of this option
        'type' => 'text', // Type of option we are creating
        'name' => 'My Text Option', // Name of the option which will be displayed in the admin panel
        'desc' => 'This is our option' // Description of the option which will be displayed in the admin panel

    ) );


    /**
     *
     * Create second tab called $aa_tab2 for second admin panel i.e. $aa_panel2
     *
     */

    $aa_tab2 = $aa_panel2->createTab( array(

        // Name the tab
        'name' => 'Tab 2',

    ) );


    // Create options for $aa_panel2 inside the $aa_tab2
    $aa_tab2->createOption( array(

        'id' => 'aa_txtarea_in_tab2_panel2', // IDs should always be unique. The ID which will be used to get the value of this option
        'type' => 'textarea', // Type of option we are creating
        'name' => 'My Text Area', // Name of the option which will be displayed in the admin panel
        'desc' => 'This is our option' // Description of the option which will be displayed in the admin panel

    ) );


    /**
     *
     * Save button for options
     *
     */
    $aa_panel2->createOption( array(

        'type' => 'save'

    ) );

}
