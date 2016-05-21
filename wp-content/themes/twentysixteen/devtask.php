<?php
/*
Template Name: Front End Dev Task
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

    <!-- Custom CSS Files -->
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/twentysixteen/css/main.css" />

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

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

</head>

<body>
	<div class="container-fluid">

		<div class="header">	
			<div class="container-fluid">
				<div class="row">
					<div class="logo-cont col-xs-4 col-sm-2 col-lg-3">
						<img src="/wp-content/assets/RMH-logo.jpg" class="header-logo" />
					</div>
					<a href="#expandMenu" data-toggle="collapse"><div class="mob-nav-btn"></div></a>

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
		</div>

		<div class="slider">
			<div class"container-fluid">
				<div class="slider-image"></div>
				<div class="row slide-link-row">
					<div class="slide-grid-cont col-xs-12 col-sm-12 col-md-12 col-lg-9">
						<div class="slide-link-container">
							<div class="slide-img-link-bg"></div>
							<div class="slide-link-text">Funding compassionate care</div>
							<a href="#"><div class="slide-link-button"><span>READ BILL AND GERRY'S STORY</span></div></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="reason-container">
			<div class="container-fluid">
				<div class="row">
					<?php $loop = new WP_Query( array( 'post_type' => 'reasons', 'posts_per_page' => 1, 'order' => 'ASC') ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post();?>
						<div class="reason-title"><?php echo the_title(); ?></div>
						<div class="reason-text"><?php echo the_content(); ?></div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		
		<div class="impacts-container">
			<div class="conatiner-fluid">
				<div class="row">
					<div class="impacts-title"> OUR IMPACT </div>
				</div>
				<div class="row">
						<?php $loop = new WP_Query( array( 'post_type' => 'impacts', 'posts_per_page' => 3, 'order' => 'ASC') ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); $impacturl = get_permalink();?>
						<div class="impact-block col-sm-4 col-md-4 col-lg-4">
							<div class="impact-number"><?php echo get_field('numbers'); ?></div>
							<div class="impact-text"><?php echo the_content(); ?></div>
							<a href="<?php echo $impacturl; ?>" class="impact-more">
								<div class="impact-link"><span>Learn More</span></div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>

		<div class="latest-blog">
			<div class="container-fluid">
				<div class="row">
					<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'order' => 'DESC') ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); 
						$posturl = get_permalink(); ?>

						<div class="post-image col-sm-12 col-md-6">
							<?php echo the_post_thumbnail() ?>
						</div>
						<div class="post-body col-sm-12 col-md-6">
							<div class="post-title">
								<?php the_title(); ?>
							</div>
							<div class="post-content">
								<?php echo the_content(); ?>
							</div>
							<div class="post-read-more"><a href="<?php echo $posturl; ?>">Read More</a></div>
						</div>

					<?php endwhile; ?>
				</div>
			</div>
		</div>

		<div class="testimonial">
			<div class="container-fluid">
				<div class="row">
					<div class="testimonial-shade"></div>
					<div class="testimonial-box">
						<div class="test-box-shade"></div>
						<?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => 1, 'order' => 'DESC') ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="testimonial-text"><?php echo the_content(); ?></div>
							<div class="testimonial-sign"><?php the_title(); ?></div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container-fluid">
				<div class="row sm-footer">
					<div class="left-links col-xs-6">
						<a href="#" class="footer-link">Calendar</a>
						<a href="#" class="footer-link">Style Guide</a>
					</div>
					<div class="social-links col-xs-8 col-sm-4 col-md-6 col-lg-6">
						<div class="search">
							<i class="search"><?php get_search_form( $echo = true ) ?></i>
						</div>
						<div class="social">
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
							<i class="fa fa-twitter-square" aria-hidden="true"></i>
							<i class="fa fa-youtube-square" aria-hidden="true"></i>
						</div>
					</div>
				</div>

				<div class="row lg-footer">
					<div class="inform col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="inform-title">STAY INFORMED</div>
						<label class="email-label">Email Address<span>*</span></label>
						<input class="email-input" />
						<button class="submit-email">SUBMIT</button>
					</div>
					<div class="info col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="loc-cont">
							<div class="info-title">RMH FOUNDATION</div>
							<div class="info-addr">2010 Health Campus Drive Harrisonburg, VA 22801</div>
							<div class="info-phn">Phone: 540.564.7222</div>
						</div>
						<div class="oth-cont">
							<span class="copy">&copy; 2016 RMH Foundation</span>
							<a class="pp">Privacy Policy</a>
						</div>
						<div class="site-credit">
							Website by
							<a href="http://blackbaud.com">Blackbaud</a>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</body>
