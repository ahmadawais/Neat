<?php
/**
 *
 * Creating customizer options via Titan Framework
 *
 * Getting started      : http://www.titanframework.net/get-started/
 * Customizer           : http://www.titanframework.net/theme-customizer-section/
 * Options              : http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 * Live preview         : http://www.titanframework.net/livepreview-parameter/
 */


/**
 *
 * tf_create_options is the hook used to create options
 *
 */
add_action( 'tf_create_options', 'aa_customizer_options' );

function aa_customizer_options() {

    // Initialize Titan with your theme name
    $titan = TitanFramework::getInstance( 'neat' );

    /**
        First section
     */

    /**
     *
     * Create a section called $aa_section
     *
     * This will create a theme customizer section (accordion tab) named ‘My Section’ in the middle of the section list.
     *
     */
    $aa_section1 = $titan->createThemeCustomizerSection( array(

        // Name the options menu
        'name' => 'My Section',

        // Name of the panel where all sections will be present
        'panel' => 'My Panel',

    ) );


    /**
     * Create the options for $aa_section1
     *
     * Now we will create options for our section that we just created called $aa_section
     *
     */

    // Body bg color
    $aa_section1->createOption( array(

        'id' => 'aa_sec_body_bg_clr', // The ID which will be used to get the value of this option
        'type' => 'color', // Type of option we are creating
        'name' => 'Site Background Color',// Name of the option which will be displayed in the admin panel
        'default' => '#fff' // Default value of our option

    ) );

    // Body text color
    $aa_section1->createOption( array(

        'id' => 'aa_sec_body_txt_clr', // The ID which will be used to get the value of this option
        'type' => 'color', // Type of option we are creating
        'name' => 'Site Text Color',// Name of the option which will be displayed in the admin panel
        'default' => '#000' // Default value of our option

    ) );

}
