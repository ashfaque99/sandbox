<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sandbox
 */

get_header();
?>

		<section>
			<div class="container">
				<div class="row">  
					<div class="col-md-12">
					<?php
						while ( have_posts() ) :
							the_post();
							the_content();
							get_the_title();

						endwhile; // End of the loop.
						?>
					</div>
				</div>	
			</div>
		</section>
 
<?php
get_footer();
