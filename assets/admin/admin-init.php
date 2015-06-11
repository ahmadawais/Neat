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
if ( file_exists( get_template_directory() .'/assets/admin/titanframework/options-init.php') ) {
    require_once( get_template_directory() .'/assets/admin/titanframework/options-init.php' );
}




