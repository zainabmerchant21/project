<?php

get_header();
?>

<div class="head">
</div>
<?php

// $show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">
	<?php
		if ( et_builder_is_product_tour_enabled() ):
			// load fullwidth page in Product Tour mode
			while ( have_posts() ): the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
					<div class="entry-content">
					<?php
						the_content();
					?>
					</div> <!-- .entry-content -->

				</article> <!-- .et_pb_post -->

		<?php endwhile;
		else:
	?>
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				/**
				 * Fires before the title and post meta on single posts.
				 *
				 * @since 3.18.8
				 */
				do_action( 'et_before_post' );
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
					
					<div class="product_wrapper">
						<div class="product_img">
							<?php echo the_post_thumbnail(); ?>
						</div>
						<div class="product_content">
							<h2><?php the_title(); ?> | Rs <?php echo get_field('price'); ?></h2>
							<?php the_content(); ?>
							<h3><span>Sku: </span><?php echo get_field('sku'); ?></h3>
							<h3><span>Color: </span><?php echo get_field('color'); ?></h3>
							<h3><span>Weight: </span><?php echo get_field('weight'); ?></h3>
							<h3><span>Size: </span><?php echo get_field('size'); ?></h3>
							<h3><span>Author: </span><?php echo get_field('author_name'); ?></h3>
						</div>
					</div>
					<div class="product_form_wrapper">
						<h1>ORDER FORM</h1>
						<?php echo do_shortcode('[contact-form-7 id="773" title="product form"]');?>
					</div>
					
				</article> <!-- .et_pb_post -->

			<?php endwhile; ?>
			</div> <!-- #left-area -->
			
			
		</div> <!-- #content-area -->
	</div> <!-- .container -->
	<?php endif; ?>
</div> <!-- #main-content -->

<?php

get_footer();
