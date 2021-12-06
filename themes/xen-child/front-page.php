<?php
/**
 * Template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
	
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

$query_args = array(
	'post_type' => 'post',
	'post_status' => 'draft',
	'posts_per_page' => 9
);

$posts_query = new WP_Query($query_args);

?> 
	
	<div class="recentPostsHolder">
		<h3 style="text-align:center; margin: 10px 0;">Our Sponsors</h3>
		<div class="sponsorsHolder">
			<?php
			if ( $posts_query-> have_posts() ) {
				while ($posts_query-> have_posts()) {
					$posts_query->the_post(); ?>

					<div class="sponsor">
						<div class="sponsorImage"><?php the_post_thumbnail(); ?></div>
						<h3 class="sponsorName"> <?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>

<?php

get_footer();
