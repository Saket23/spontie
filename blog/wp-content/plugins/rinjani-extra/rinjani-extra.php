<?php
	/*
	Plugin Name: Rinjani Extra
	Plugin URI: http://www.themesawesome.com
	Description: A plugin to add functionality to Premium Theme Rinjani from Themes Awesome
	Version: 1.0
	Author: Themes Awesome
	Author URI: http://www.themesawesome.com
	License: GPL2
	*/



define( 'RINJANI_EXTRA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'RINJANI_EXTRA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );



// Flush rewrite rules on activation
function rinjani_extra_activation() {
    flush_rewrite_rules(true);
}


if(!function_exists('redux_register_custom_extension_loader')) :
    function redux_register_custom_extension_loader($ReduxFramework) {
        $path    = dirname( __FILE__ ) . '/extensions/';
            $folders = scandir( $path, 1 );
            foreach ( $folders as $folder ) {
                if ( $folder === '.' or $folder === '..' or ! is_dir( $path . $folder ) ) {
                    continue;
                }
                $extension_class = 'ReduxFramework_Extension_' . $folder;
                if ( ! class_exists( $extension_class ) ) {
                    // In case you wanted override your override, hah.
                    $class_file = $path . $folder . '/extension_' . $folder . '.php';
                    $class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file );
                    if ( $class_file ) {
                        require_once( $class_file );
                    }
                }
                if ( ! isset( $ReduxFramework->extensions[ $folder ] ) ) {
                    $ReduxFramework->extensions[ $folder ] = new $extension_class( $ReduxFramework );
                }
            }
    }
    // Modify {$redux_opt_name} to match your opt_name
    add_action("redux/extensions/rinjani_framework/before", 'redux_register_custom_extension_loader', 0);
endif;


    include_once dirname( __FILE__ ) . '/rinjani-importer.php';
