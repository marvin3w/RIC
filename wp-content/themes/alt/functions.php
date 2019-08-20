<?php
    //Remove admin bar
    show_admin_bar(false);

    //Remove Meta wp generetor
    remove_action('wp_head', 'wp_generator');

    //Remove Emoji
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    //Remove RSD
    remove_action('wp_head', 'rsd_link');

    //Remove wlwmanifest
    remove_action('wp_head', 'wlwmanifest_link');

    //Remove wp-embed.min.js
    function my_deregister_scripts(){
        wp_deregister_script('wp-embed');
    }
    add_action( 'wp_footer', 'my_deregister_scripts' );

    //Remove jquery wp-head
    function load_jquery() {
        if (!is_admin()) {
            wp_deregister_script('jquery');
            wp_enqueue_script('jquery');
        }
    }
    add_action('template_redirect', 'load_jquery');

    //Add suport thumbnail
    add_theme_support( 'post-thumbnails' );

    // /* GET specific custom field from post */
    // add_action('wp_head', 'myplugin_ajaxurl');
    // function myplugin_ajaxurl()
    // {
    //     echo '<script type="text/javascript">var ajaxurl = "' . admin_url('admin-ajax.php') . '"; var base_url = "' . get_site_url() . '" </script>';
    // }

    //Add menu
    register_nav_menus( array(
        'header_menu' => __('Menu Principal'),
        'childrens_menu' => __('Childrens Menu'),
    ));

    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');

    //Registro scripts e css
    function theme_scripts(){
        // wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/core.min.js', array(), '1.0.0', true );
        // wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/script.js', array(), '1.0.0', true );
        // wp_enqueue_style( 'main-css', get_template_directory_uri() . '/dist/css/main.min.css', array(), time() );
        // wp_enqueue_style('css-slider-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', false, '1.1', 'all');

        wp_enqueue_style('foundation', get_template_directory_uri() . '/assets/css/foundation.min.css', false, '1.1', 'all');
        wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', false, '1.1', 'all');
        wp_enqueue_style('css-slider', get_template_directory_uri() . '/assets/css/slick.css', false, '1.1', 'all');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', true, '5.0', 'all');
        wp_enqueue_style('fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', false, '1.1', 'all');
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', false, '1.1', 'all');
        // wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/landing.css', false, '1.1', 'all');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '2.2', true);
        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.8', true);
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '3', true);
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.1', true);
    }
    add_action('wp_enqueue_scripts', 'theme_scripts');

    function cc_mime_types( $mimes ) {
        $mimes['svg'] = 'image/svg+xml';
    
        return $mimes;
    }
    
    add_filter( 'upload_mimes', 'cc_mime_types' );
    //Pagination
    function wordpress_pagination() {
        global $wp_query;

        $big = 999999999;

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
        ) );
    }


    // Front end only, don't hack on the settings page
if ( ! is_admin() ) {
    add_filter( 'wp_get_nav_menu_items', 'replace_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}

// Replaces a custom URL placeholder with the URL to the latest post
function replace_placeholder_nav_menu_item_with_latest_post( $items, $menu, $args ) {

    // Loop through the menu items looking for placeholder(s)
    foreach ( $items as $item ) {

        // Is this the placeholder we're looking for?
        if ( '#latestpost' != $item->url )
            continue;

        // Get the latest post
        $latestpost = get_posts( array(
            'numberposts' => 1,
        ) );

        if ( empty( $latestpost ) )
            continue;

        // Replace the placeholder with the real URL
        $item->url = get_permalink( $latestpost[0]->ID );
    }

    // Return the modified (or maybe unmodified) menu items array
    return $items;
}

// Get top ancestor
function get_top_ancestor_id() {
    global $post;
    if ($post->$post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[2];
    }
    return $post->ID;
}

function has_children() {
    global $post;
    $pages  = get_pages('child_of=' . $post->ID);
    return count($pages);
}

function add_custom_class($classes=array(), $menu_item=false) {
    if ( !is_page() && 'Blog' == $menu_item->title && 
            !in_array( 'current-menu-item', $classes ) ) {
        $classes[] = 'current-menu-item';        
    }                    
    return $classes;
}

add_filter('nav_menu_css_class', 'add_custom_class', 100, 2); 


// Remove trash tags do snippet gerado do CF7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

// add_filter('wpcf7_autop_or_not', '__return_false');

set_post_thumbnail_size( 400, 400, true );
add_theme_support('post-formats', array('aside', 'gallery', 'link'));

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails', array( 'post' ) );
}
add_action('after_setup_theme', 'theme_features');


// function wps_highlight_results($text){
//     if(is_search()){
//     $sr = get_query_var('s');
//     $keys = explode(" ",$sr);
//     $text = preg_replace('/('.implode('|', $keys) .')/iu', '<span class="search">'.$sr.'</span>', $text);
//     }
//     return $text;
// }
// add_filter('the_excerpt', 'wps_highlight_results');
// add_filter('the_title', 'wps_highlight_results');
