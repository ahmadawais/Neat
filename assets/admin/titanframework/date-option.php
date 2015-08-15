<?php
/**
 *
 * Creating date option via Titan Framework
 *
 * Getting started      : http://www.titanframework.net/get-started/
 * Admin Panel          : http://www.titanframework.net/admin-panels/
 * Admin Tabs           : http://www.titanframework.net/admin-tabs/
 * Options              : http://www.titanframework.net/date/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 */


/**
 *
 * tf_create_options is the hook used to create options
 *
 */
add_action( 'tf_create_options', 'aa_function_date_option' );

function aa_function_date_option() {

    // Initialize Titan with your theme name
    $titan = TitanFramework::getInstance( 'neat' );

    /**
     *
     * Create admin panel options page called $aa_panel
     *
     * This is a first admin panel and is called by its name i.e. $aa_panel
     */
    $aa_panel = $titan->createAdminPanel( array(

        // Name the options menu
        'name' => 'Date Option',

    ) );


    /**
     * Date Option
     */
    $aa_panel->createOption( array(

        'name'    => 'My Date Option',
        'id'      => 'aa_date_option',
        'type'    => 'date',
        'desc'    => 'Choose a date',
        'date'    => TRUE,
        'time'    => TRUE,
        'default' => '2015-08-20',

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


}
