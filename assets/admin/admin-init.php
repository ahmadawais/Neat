<?php
/**
 *
 * Admin related initializations
 *
 */

/**
 *
 * Titan Framework Required to be installed
 *
 * It adds Titan Framework as a plugin
 *
 * http://www.titanframework.net/get-started/
 *
 */
if ( file_exists( get_template_directory() .'/assets/admin/titanframework/titan-framework-checker.php') ) {
    require_once( get_template_directory() .'/assets/admin/titanframework/titan-framework-checker.php' );
}


/**
 *
 * Create an options via Titan Framework
 *
 * http://www.titanframework.net/get-started/
 *
 */

// Admin panel options
if ( file_exists( get_template_directory() .'/assets/admin/titanframework/adminpanel-options-init.php') ) {
    require_once( get_template_directory() .'/assets/admin/titanframework/adminpanel-options-init.php' );
}

// Metabox options
if ( file_exists( get_template_directory() .'/assets/admin/titanframework/metabox-options-init.php') ) {
    require_once( get_template_directory() .'/assets/admin/titanframework/metabox-options-init.php' );
}

// Customizer options
if ( file_exists( get_template_directory() .'/assets/admin/titanframework/customizer-options-init.php') ) {
    require_once( get_template_directory() .'/assets/admin/titanframework/customizer-options-init.php' );
}

/**
 *
 * More Options from TF
 */
// Date options
if ( file_exists( get_template_directory() .'/assets/admin/titanframework/date-option.php') ) {
    require_once( get_template_directory() .'/assets/admin/titanframework/date-option.php' );
}

