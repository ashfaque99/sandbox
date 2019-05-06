<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sandbox
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-inverse custom-navbar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/img/white-logo.png"></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">HOME</a></li>
          <li><a href="#about">COMPANY</a></li>
          <li><a href="#contact">SERVICES</a></li>
          <li><a href="#contact">OUR WORK</a></li>
          <li><a href="#contact">LATEST</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>