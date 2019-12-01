<?php get_header(); ?>
<?php echo do_shortcode('[et_pb_section global_module="product"][/et_pb_section]'); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
				<h1 class="product_heading">All Products</h1>
				<div class="listing_wrapper">

					<?php
						$args = array(
						'post_type' => 'products',
						'posts_per_page'    => -1, // -1 =  show all posts
					);
   
	   $post_query = new WP_Query($args);         
	     if($post_query->have_posts()){
			while($post_query->have_posts()){
				$post_query->the_post();?>
					<div class="post">
						<div class="hovereffect prod_content ">
							<div class="prod_img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="overlay">
								<h2><?php the_title();?></h2>
								<a class="info" href="<?php the_permalink(); ?>">Order</a>
							</div>
						</div>
					</div>
					<?php
    		}
		}
        ?>
				</div>

			</div> <!-- #left-area -->

		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->
<!-- <ul class="custom_cat_list">
	<?php $categories = get_categories('taxonomy=product_categories'); 
         foreach ($categories as $category) : ?>
            <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a></li>
    <?php endforeach; ?>
<ul>
	 -->
<!-- <h1>helo</h1>
	<?php
		$types = get_terms( array(
			'taxonomy' => 'product_categories',
			'hide_empty' => true,
		) );
		
		foreach($types as $type) {
		
			$image = get_field('cat_img', 'product_categories_' . $type->term_id . '' );
			
			if ( has_term( $type->term_id, 'product_categories')) {
				echo '<img src="' . $image['url'] . '" /> ';
			}
		}
	?> -->

<?php

 ?>

<?php




 get_footer();