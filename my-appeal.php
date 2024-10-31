<?php

namespace JordanLeven\Plugins\MyAppeal;

/*
Plugin Name: My Appeal
Plugin URI:
Description: My Appeal allows you to append or replace appeal codes on iModules giving links with solicitation-specific appeal codes.
Version: 2.2.6
Author: Jordan Leven
Author URI: https://github.com/jordanleven/
Contributors:
*/

/**
* The lifetime of an appeal appeal code.
*/
define('APPEAL_CODE_LIFETIME_IN_MINUTES', 30);

/**
* The relative file location
*/
define('APPEAL_CODE_SCRIPT_RELATIVE_FILE_LOCATION', '/dist/my-appeal.built.min.js');

// Register the script
wp_register_script(
    "my-appeal-js",
    plugin_dir_url(__FILE__) . APPEAL_CODE_SCRIPT_RELATIVE_FILE_LOCATION,
    array("jquery"),
    filemtime(plugin_dir_path(__FILE__) . APPEAL_CODE_SCRIPT_RELATIVE_FILE_LOCATION),
    true );

// localize variables
wp_localize_script(
    "my-appeal-js",
    "my_appeal_local_object",
    array(
        "appealCodeLifetimeInMinutes" => APPEAL_CODE_LIFETIME_IN_MINUTES
    )
);

// Enqueue the script
wp_enqueue_script( "my-appeal-js" );

?>
