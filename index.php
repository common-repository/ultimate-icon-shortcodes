<?php
/*
Contributors:   ShaneJones, alexmoss
Plugin Name:    Ultimate Icon Shortcodes - LITE
Plugin URI:     http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/
Donate link:    http://peadig.com
Description:    Allows easy access to thousands of Icons for easy use on your WordPress installation
Version:        1.1
Author:         Alex Moss and Shane Jones
Author URI:     http://peadig.com/
Link:           http://peadig.com/wordpress-plugins/ultimate-icon-shortcodes/
Tags:           icons, shortcodes, Font Awesome, Brandico, Fontelico, Foundation Icons, Iconic, Open Web Fonts, Raphael, Typicons
Requires at least: 3
Tested up to:   3.7
Stable tag:     1.1

Copyright (C) 2010-2013, Shane Jones Alex Moss
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of Alex Moss or Shane Jones nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

*/

if ( is_admin() && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) ){


    add_action('init', 'uis_shortcode_button_init');

    function uis_shortcode_button_init() {

        if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
            return;

        add_filter('mce_external_plugins', 'uis_register_tinymce_plugin');

        add_filter('mce_buttons', 'uis_add_tinymce_button');
    }


    function uis_register_tinymce_plugin($plugin_array) {
        $plugin_array['uis_button'] = '../../../wp-content/plugins/ultimate-icon-shortcodes-lite/shortcode.js';
        return $plugin_array;
    }

    function uis_add_tinymce_button($buttons) {
        $buttons[] = 'uis_button';
        return $buttons;
    }

    add_action( 'admin_print_styles', 'admin_css' );
    add_action( 'admin_print_styles', 'uis_styles' );

    function admin_css(){
        wp_register_style	('admin_css', plugins_url('css/overlay-styles.css', __FILE__), false);
        wp_enqueue_style	('admin_css');
    }


}





add_shortcode('uis', 'uis_output' );

function uis_output($atts) {
    extract(shortcode_atts(array(
        "type" => '',
        "icon" => '',
        "size" => '',
        "rotation" => '',
        "spinning" => ''
    ), $atts));


        $content  = '<span class="';

            if($type == "fontawesome"){

                $content .= $icon;

                if($size!=''){
                    $content .= ' icon-' . $size;
                }

                if($rotation!=''){
                    $content .= ' icon-' . $rotation;
                }

                if($spinning!=''){
                    $content .= ' icon-spin';
                }

            } else {

                $content .= $icon;

            }

        $content .= '"></span>';


    return $content;

}




add_action( 'wp_enqueue_scripts', 'uis_styles' );

function uis_styles() {

    wp_register_style( 'fonts', plugins_url( 'ultimate-icon-shortcodes-lite/css/uis-fonts.css' ) );
    wp_enqueue_style( 'fonts' );

    wp_register_style( 'fonts-ie7', plugins_url( 'ultimate-icon-shortcodes-lite/css/uis-fonts-ie7.css' ) );
    wp_enqueue_style( 'fonts-ie7' );

}