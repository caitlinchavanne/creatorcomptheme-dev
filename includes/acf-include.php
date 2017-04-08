<?php
    
    //customize ACF path

        add_filter('acf/settings/path', 'my_acf_settings_path');

        function my_acf_settings_path( $path ) {

            // update path
            
            $path = get_template_directory() . '/includes/acf/';

            // return
            
            return $path;

        }


    // 2. customize ACF dir
    
    add_filter('acf/settings/dir', 'my_acf_settings_dir');

    function my_acf_settings_dir( $dir ) {

        // update path
        
        $dir = get_template_directory() . '/includes/acf/';

        // return
        
        return $dir;

    }


    // 3. Hide ACF field group menu item
    
    add_filter('acf/settings/show_admin', '__return_false');


    // 4. Include ACF
    
    include_once( get_template_directory() . '/includes/acf/acf.php' );
    
    //FIELDS

    if( function_exists('acf_add_local_field_group') ):

                acf_add_local_field_group(array (

                    'key' => 'group_58d4b82632612',

                    'title' => 'header',

                    'fields' => array (

                        array (

                            'key' => 'field_58d4b83c34fd7',

                            'label' => 'Header Logo',

                            'name' => 'header_logo',

                            'type' => 'image',

                            'instructions' => 'Upload an image to be used in the navigation bar.',

                            'required' => 0,

                            'conditional_logic' => 0,

                            'wrapper' => array (

                                'width' => '',

                                'class' => '',

                                'id' => '',

                            ),
                            'return_format' => 'url',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                    ),
                    'location' => array (
                        array (
                            array (
                                'param' => 'options_page',
                                'operator' => '==',
                                'value' => 'acf-options-header',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => 1,
                    'description' => '',
                ));

            endif;

    



?>