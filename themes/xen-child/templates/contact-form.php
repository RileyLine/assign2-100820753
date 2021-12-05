<?php
/**
 * Template Name: Contact Form
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

?>

<div id="contactBlurb" class="contactBlurb">
	<h3>We Want to Hear From You!</h3>
	<p>Without your continued submissions, we wouldn't be able to continuously share new content with you. We thank you!</p>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/env.png">
</div>

<form id="contactForm" class="contactForm">

	<input type="text" placeholder="First Name">
	<input type="text" placeholder="Last Name">
	<input type="email" placeholder="yourEmail@email.com">
	<textarea id="contactBox" cols="30" rows="10"></textarea>
	<button id="submitBtn">Submit</button>

</form>

<?php

get_footer();