<?php

function load_style() {
    wp_enqueue_style('stylesheet', get_template_directory_uri().'/style.css');
    wp_enqueue_style('custom', get_stylesheet_directory_uri().'/css/custom.css');
    wp_enqueue_style('animation', get_stylesheet_directory_uri().'/css/animation.css');
    wp_enqueue_style('slick',get_stylesheet_directory_uri().'/slick-master/slick/slick.css');
    wp_enqueue_style('slick_theme',get_stylesheet_directory_uri().'/slick-master/slick/slick-theme.css');
    wp_enqueue_script('slick_js',get_stylesheet_directory_uri().'/slick-master/slick/slick.js');
    wp_enqueue_script('custom_js',get_stylesheet_directory_uri().'/js/custom.js');
}
add_action('wp_enqueue_scripts', 'load_style');


//Function For Gallery
function gallery( $atts ){

    $atts = shortcode_atts( array(
        'id'=> '',
    ), $atts );

    $args = array(
        'post_type' => 'products',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => array(
            array (
                'taxonomy' => 'product_categories',
                'field' => 'id',
                'terms' => $atts['id'],
            )
        ),
    );
    $string = '';

    $query = new WP_Query( $args );
    //var_dump($query->have_posts());die('test');
    if( $query->have_posts() ){
        $string .= '<div class="gallery_wrapper">';
        while( $query->have_posts() ){
            $query->the_post();
            $string .= '<div class="gallery_inner">';
            
            $string .= get_the_post_thumbnail();
            $string.='</div>';
        }
        $string .= '</div>';

}
wp_reset_postdata();
return $string;
}
add_shortcode('gallery_filter', 'gallery');


// Function for slick slider
function slick_slider( ){
    $args = array(
        'post_type' => 'products',
        'post_status' => 'publish',
        'posts_per_page' => 5,
        'order' => 'rand',
        'tax_query' => array(
            array (
                'taxonomy' => 'product_categories',
                'field' => 'name',
                'terms' => 'popular',
                
            )
        ),
    );
    $string = '';
    
    $query = new WP_Query( $args );
    //var_dump($query->have_posts());die('test');
    if( $query->have_posts() ){
        $string .= '<div class="wrapper">';
        while( $query->have_posts() ){
            $query->the_post();
            $string .= '<div class="inner">';
            $string .= get_the_post_thumbnail();
            $string .= '<h1>'. get_the_title().'</h1>';
            $string.='</div>';
        }
        $string .= '</div>';
    
    }
    wp_reset_postdata();
    return $string;
    }
    add_shortcode('slick_short', 'slick_slider');



?>


