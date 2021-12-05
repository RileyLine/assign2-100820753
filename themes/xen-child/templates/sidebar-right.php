<?php
/**
 * Template Name: Sidebar Right
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
	'post_status' => 'publish',
	'posts_per_page' => 3
);

$posts_query = new WP_Query($query_args);

// if ( $posts_query-> have_posts() ) {
// 	while ($posts_query-> have_posts()) {
// 		$posts_query->the_post();

// 		the_post_thumbnail();
// 		the_title();
// 		the_excerpt();
// 	}
// }

?>
	<div class="customSidebar">
		<h2 style="text-align:center">Recent Posts</h2>
		<div class="postsHolder">
			<?php 
			
			if ( $posts_query-> have_posts() ) {
				while ($posts_query-> have_posts()) {
					$posts_query->the_post();

					?>
					
					<div class="queryResult">

						<div class="postImage"><?php the_post_thumbnail(); ?></div>
						<h3 class="titleText"><?php the_title(); ?></h3>
						<div class="excerptArea"><?php the_excerpt() ?></div>

					</div>
					
					<?php
					
					
					
				}
			}
			
			
			?>
		</div>
	</div>
<?php

get_footer();
