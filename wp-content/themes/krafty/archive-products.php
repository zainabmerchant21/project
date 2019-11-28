<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
			<h1 class="product_heading">ALL PRODUCTS</h1>
            <div class="listing_wrapper">
       
		
	   
	   <?php
	   $args = array(
		'post_type'         => 'products',
		'posts_per_page'    => -1, // -1 =  show all posts
		// 'tax_query'         => array(array('taxonomy' => 'product_categories', 'field' => 'id', 'terms' => $term->term_id )),
	   );
   
	   $post_query = new WP_Query($args);         
	     if($post_query->have_posts()){
			while($post_query->have_posts()){
				$post_query->the_post();?>



				<div class="post">
					<div class="hovereffect prod_content ">
					<div class="prod_img" >
                               <?php the_post_thumbnail(); ?>
						</div>
						<div class="overlay">
						<h2><?php the_title();?></h2>
						<a class="info" href="<?php the_permalink(); ?>">Order</a>
						</div>
					</div>
				</div>



				<!-- <div class="post">
					<div class="prod_content">
						<div class="prod_img" >
                               <?php the_post_thumbnail(); ?>
						</div>
						<h2><?php the_title();?></h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<button>ORDER</button>
						</a>
					</div>
				</div> -->
	    <?php
    		}
		}
        ?>
        </div>
        		
			</div> <!-- #left-area -->

			
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
