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

		<section class="contact-section">
			<div class="container">
				<div class="row">  
					<div class="col-md-12 text-center">
						<h1><?php echo get_the_title();?></h1>
						<h2>We'd LOVE to help!</h2>
						<p>We like to create things with fun, open-minded people, Feel free to say hello!</p>
						<br>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 contact-section-left">
						<form action="/action_page.php">
							<div class="form-group">
								<label for="email">Your Email Address</label>
								<input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
							</div>
							<div class="form-group">
								<label for="subject">Your Message:</label>
								<input type="text" class="form-control" id="subject" placeholder="Subject (optional but helpful)" name="pwd">
							</div>
							<div class="form-group">
								<label for="comment">Comment:</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
						
							<button type="submit" class="btn btn-primary">Send</button>
						</form>	
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</section>
 
<?php
get_footer();
