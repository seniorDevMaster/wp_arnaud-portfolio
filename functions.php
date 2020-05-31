<?php

    function load_stylesheets() {
        wp_register_style('plugin-style', get_template_directory_uri() . '/js/lib/plugin/css/style.min.css', array(), 1, 'all');
        wp_enqueue_style('plugin-style');

        wp_register_style('swiper', get_template_directory_uri() . '/js/lib/plugin/css/swiper.min.css', array(), 1, 'all');
        wp_enqueue_style('swiper');

        wp_register_style('pushy', get_template_directory_uri() . '/js/lib/plugin/css/pushy.min.css', array(), 1, 'all');
        wp_enqueue_style('pushy');

        wp_register_style('main-style', get_template_directory_uri() . '/css/style.min.css', array(), 1, 'all');
        wp_enqueue_style('main-style');

        wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.min.css', array(), 1, 'all');
        wp_enqueue_style('responsive');

        wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
        wp_enqueue_style('custom');
    }

    add_action('wp_enqueue_scripts', 'load_stylesheets');

    function load_scripts() {
        wp_register_script('jquery-2.2.0', get_template_directory_uri() . '/js/lib/plugin/jquery-2.2.0.min.js', array(), 2, 1, 1);
        wp_enqueue_script('jquery-2.2.0');

        wp_register_script('skill', get_template_directory_uri() . '/js/lib/plugin/skill.bars.jquery.min.js', array(), 1, 1, 1);
        wp_enqueue_script('skill');

        wp_register_script('swiper', get_template_directory_uri() . '/js/lib/plugin/swiper.min.js', array(), 1, 1, 1);
        wp_enqueue_script('swiper');

        wp_register_script('mixitup', get_template_directory_uri() . '/js/lib/plugin/jquery.mixitup.min.js', array(), 1, 1, 1);
        wp_enqueue_script('mixitup');

        wp_register_script('scrollme', get_template_directory_uri() . '/js/lib/plugin/jquery.scrollme.min.js', array(), 1, 1, 1);
        wp_enqueue_script('scrollme');

        wp_register_script('pushy', get_template_directory_uri() . '/js/lib/plugin/pushy.min.js', array(), 1, 1, 1);
        wp_enqueue_script('pushy');

        wp_register_script('main', get_template_directory_uri() . '/js/main.min.js', array(), 1, 1, 1);
        wp_enqueue_script('main');

        wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
        wp_enqueue_script('custom');
    }

    add_action('wp_enqueue_scripts', 'load_scripts');