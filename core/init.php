<?php 
    /* Plugin Activation */
    require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
    require_once dirname( __FILE__ ) . '/redux-extensions/extensions-init.php';
    require_once dirname( __FILE__ ) . '/custom_options.php';

    add_action( 'tgmpa_register', 'my_plugin_activation' );
    function my_plugin_activation() {
        // Khai bao plugin can cai dat
        $plugins = array(
            array(
                'name' => 'Redux Framework',
                'slug' => 'redux-framework',
                'required' => true,
                'version'  => '3.6.4',
            ),                                  
            array(
                'name'                  => 'Contact form 7', // The plugin name
                'slug'                  => 'contact-form-7', // The plugin slug (typically the folder name)
                'required'              => true, // If false, the plugin is only 'recommended' instead of required
            ),  
        );
 
        // Thiet lap TGM
        $configs = array(
                'menu' => 'fr_plugin_install',
                'has_notice' => true,
                'dismissable' => false,
                'is_automatic' => true
        );
        tgmpa( $plugins, $configs );
    }