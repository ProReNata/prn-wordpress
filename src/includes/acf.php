<?php

include 'acf-export.php';

function register_acf_block_types()
{
    function my_plugin_block_categories($categories, $post)
    {
        /* if ($post->post_type !== 'page') {
            return $categories;
        }*/
        return array_merge(
        $categories,
        array(
            array(
                'slug' => 'front-page',
                'title' => __('Front Page', 'prn-wp-theme'),
                // 'icon'  => 'wordpress',
            ),
        )
    );
    }
    add_filter('block_categories', 'my_plugin_block_categories', 10, 2);

    // Hero block
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'description'       => __('A big image with text'),
        'render_template'   => 'blocks/hero.php',
        'category'          => 'front-page',
        'icon'              => 'megaphone',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));

    // References block
    acf_register_block_type(array(
        'name'              => 'references',
        'title'             => __('References'),
        'description'       => __('Logos'),
        'render_template'   => 'blocks/refs.php',
        'category'          => 'front-page',
        'icon'              => 'heart',
        // 'keywords'          => array( 'refrences', 'front-page' ),
    ));

    // Quote block
    acf_register_block_type(array(
        'name'              => 'prn-quote',
        'title'             => __('PRN Quote'),
        'description'       => __('Our Quote'),
        'render_template'   => 'blocks/quote.php',
        'category'          => 'common',
        'icon'              => 'format-quote',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));

    // Leading block
    acf_register_block_type(array(
        'name'              => 'leading',
        'title'             => __('Leading'),
        'description'       => __('Bigger text'),
        'render_template'   => 'blocks/leading.php',
        'category'          => 'common',
        'icon'              => 'text',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));

    // Highlight block
    acf_register_block_type(array(
        'name'              => 'highlight',
        'title'             => __('Highlight'),
        'description'       => __('Highlight a feature'),
        'render_template'   => 'blocks/highlight.php',
        'category'          => 'front-page',
        'icon'              => 'index-card',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));

    // Modules block
    acf_register_block_type(array(
        'name'              => 'modules',
        'title'             => __('Modules'),
        'description'       => __('Lists Modules'),
        'render_template'   => 'blocks/modules.php',
        'category'          => 'front-page',
        'icon'              => 'screenoptions',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));

    // Salesteam block
    acf_register_block_type(array(
        'name'              => 'salesteam',
        'title'             => __('Salesteam'),
        'description'       => __('Salesteam'),
        'render_template'   => 'blocks/salesteam.php',
        'category'          => 'front-page',
        'icon'              => 'groups',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));

    // Small highligts block
    acf_register_block_type(array(
        'name'              => 'highlights_sm',
        'title'             => __('Small highligts'),
        'description'       => __('Some icons with highlights'),
        'render_template'   => 'blocks/highlights_sm.php',
        'category'          => 'front-page',
        'icon'              => 'awards',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));

    // Pricing block
    acf_register_block_type(array(
        'name'              => 'pricing',
        'title'             => __('Pricing'),
        'description'       => __('Pricing matrix'),
        'render_template'   => 'blocks/pricing.php',
        'category'          => 'common',
        'icon'              => 'grid-view',
        // 'keywords'          => array( 'hero', 'front-page' ),
    ));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}
