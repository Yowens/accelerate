<?php
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->




<section class="our-services">
	<div class="site-content">

		<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.
			Here's a brief overview of our offered services
			</p>

		<ul class="featured-services">
		<?php query_posts('posts_per_page=4&post_type=our_services'); ?>
			<?php while ( have_posts() ) : the_post();
					$image_1 =get_field ('image_1');
					$size="medium";
			?>
			<li class="individual-featured-services">
				<figure class="featured-services-row">
					<?php echo wp_get_attachment_image($image_1, $size); ?>
					<?php echo wp_get_attachment_image($image_1, $size); ?>
					<?php echo wp_get_attachment_image($image_1, $size); ?>
				</figure>

					<h5><a href="<?php the_permalink(); ?>"><?php the_title ();  ?></a></h5>
			</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
	</ul>

	</div>

<?php get_footer(); ?>

</section>
