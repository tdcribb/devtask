<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<footer class="footer">
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
		</footer>

</body>
</html>
