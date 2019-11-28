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


function my_shortcode( ){

    $args = array(
    'post_type' => 'products',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
);
$string = '';
$query = new WP_Query( $args );
//var_dump($query->have_posts());die('test');
if( $query->have_posts() ){
    
    $string .= '<div>';
    while( $query->have_posts() ){
        $query->the_post();
        // $string .= '<p>'. get_the_content() .'</p>';
         // $string .= '<p>'. get_field('size') .'</p>';
       // $string .= '<a href="'. get_post_permalink() .'">Read More</a>';
        $string .= get_the_post_thumbnail();
        $string .= '<h2>'. get_the_title() .'</h2>';
        $string .= '<p>'. get_field('price') .'</p>';
    }
    $string .= '</div>';

}
wp_reset_postdata();
return $string;
}
add_shortcode('my_shortcode_name', 'my_shortcode');




// function slick_slider( $atts ){

// $atts = shortcode_atts( array(
//     'id'=> '',
// ), $atts );

// $args = array(
//     'post_type' => 'products',
//     'post_status' => 'publish',
//     'posts_per_page' => 5,
//     'order' => 'ASC',
//     'tax_query' => array(
//         array (
//             'taxonomy' => 'product_categories',
//             'field' => 'id',
//             'terms' => $atts['id'],
//         )
//     ),
// );
// $string = '';
// // $inn = '';

// $query = new WP_Query( $args );
// //var_dump($query->have_posts());die('test');
// if( $query->have_posts() ){
//     $string .= '<div class="wrapper">';
//     while( $query->have_posts() ){
//         $query->the_post();
//         $string .= '<div class="inner">';
           
//          $string .= get_the_post_thumbnail();
//         $string.='</div>';
//     }
//     $string .= '</div>';

// }
// wp_reset_postdata();
// return $string;
// }
// add_shortcode('slick_short', 'slick_slider');


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




    function check(){
        $taxonomy = 'product_categories';
 
        // Get the term IDs assigned to post.
        $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
         
        // Separator between links.
        $separator = ', ';
         
        if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
         
            $term_ids = implode( ',' , $post_terms );
         
            $terms = wp_list_categories( array(
                'title_li' => '',
                'style'    => 'none',
                'echo'     => false,
                'taxonomy' => $taxonomy,
                'include'  => $term_ids
            ) );
         
            $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
         
            // Display post categories.
            echo  $terms;
        }

    }
    add_shortcode('wp','check');
?>


