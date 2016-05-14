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

	<!-- Custom JS Files -->
    <script src="js/devtask.js"></script>

    <!-- Custom CSS Files -->

	<link rel="stylesheet" type="text/css" media="all" href="/css/main.css" />

	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/transition.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">



</head>

<body>
	<div class="container-fluid">
		<div class="header container-fluid">	
				
					<img src="/wp-content/assets/RMH-logo.jpg" class="header-logo" />
				

				<div class="main-nav ">
					<a href="#" role="button">Your Impact</a>
					<a href="#" role="button">Ways to Give</a>
					<a href="#" role="button">How Your Gift is Used</a>
					<a href="#" role="button">Volunteer</a>
					<a href="#" role="button">About Us</a>
					<a href="#" role="button">DONATE</a>
				</div>

		</div>
		<div class="slider container-fluid">
			<div class="slide-link-container">
				<div class="slide-img-link-bg"></div>
				<div class="slide-link-text">Funding compassionate care</div>
				<a href="#"><div class="slide-link-button"><span>READ BILL AND GERRY'S STORY</span></div></a>
			</div>
		</div>
		<div class="reason-container container-fluid">
			<?php $loop = new WP_Query( array( 'post_type' => 'reasons', 'posts_per_page' => 1, 'order' => 'ASC') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="reason-title"><?php echo the_title(); ?></div>
				<div class="reason-text"><?php echo the_content(); ?></div>
			<?php endwhile; ?>
		</div>
		<div class="impacts-container container-fluid">
			<div class="container">
				<div class="impacts-title"> OUR IMPACT </div>
				<?php $loop = new WP_Query( array( 'post_type' => 'impacts', 'posts_per_page' => 3, 'order' => 'ASC') ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); $impacturl = get_permalink();?>
					<div class="impact-block col-sm-12 col-md-4 col-lg-4">
						<div class="impact-number"><?php echo get_field('numbers'); ?></div>
						<div class="impact-line"></div>
						<div class="impact-text"><?php echo the_content(); ?></div>
						<a href="<?php echo $impacturl; ?>" class="impact-more">
							<div class="impact-link"><span>Learn More</span></div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div><!-- .content-area -->
		<div class="latest-blog container-fluid">

			<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'order' => 'DESC') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); 
					$posturl = get_permalink(); ?>
					<div class="post-image col-sm-12 col-md-6 col-lg-6">
						<?php echo the_post_thumbnail() ?>
					</div>
					<div class="post-body col-sm-12 col-md-6 col-lg-6">
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
		<div class="testimonial container-fluid">
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
		<div class="footer container-fluid">
			<div class="sm-footer">
				<div class="left-links col-sm-12 col-md-6 col-lg-6">
					<a href="#" class="footer-link">Calendar</a>
					<a href="#" class="footer-link">Style Guide</a>
				</div>
				<div class="social-links col-sm-12 col-md-6 col-lg-6">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
					<i class="fa fa-youtube-square" aria-hidden="true"></i>
					<i class="search"><?php get_search_form( $echo = true ) ?></i>
				</div>
			</div>
			<div class="lg-footer">
				<div class="inform col-sm-12 col-md-6 col-lg-6">
					<div class="inform-title">STAY INFORMED</div>
					<label class="email-label">Email Address<span>*</span></label>
					<input class="email-input" />
					<button class="submit-email">SUBMIT</button>
				</div>
				<div class="info col-sm-12 col-md-6 col-lg-6">
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
</body>
