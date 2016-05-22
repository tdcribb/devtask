<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
  		var $ = jQuery.noConflict();    
	</script>

	<!-- JS Files -->
    <script src="/wp-content/themes/twentysixteen/js/devtask.js"></script>
    <script src="/wp-content/themes/twentysixteen/js/collapse.js"></script>
    <script src="/wp-content/themes/twentysixteen/js/transition.js"></script>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Google Fonts & Font Awesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/wp-content/themes/twentysixteen/font-awesome/css/font-awesome.min.css">

	<!-- Custom CSS Files -->
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/twentysixteen/css/main.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

</head>

<body>

		<header class="header">	
			<div class="container-fluid">
				<div class="row">
					<div class="logo-cont col-xs-4 col-sm-2 col-lg-3">
						<img src="/wp-content/assets/RMH-logo.jpg" class="header-logo" />
					</div>
					<a href="#expandMenu" data-toggle="collapse" ><div class="mob-nav-btn"></div></a>

					<div id="expandMenu" class="main-nav col-xs-8 col-sm-10 col-lg-9">
						<a href="#" class="nav-link" role="button">Your Impact</a>
						<a href="#" class="nav-link" role="button">Ways to Give</a>
						<a href="#" class="nav-link" role="button">How Your Gift is Used</a>
						<a href="#" class="nav-link" role="button">Volunteer</a>
						<a href="#" class="nav-link" role="button">About Us</a>
						<a href="#" class="nav-link" role="button">DONATE</a>
					</div>
				</div>
			</div>
		</header>

