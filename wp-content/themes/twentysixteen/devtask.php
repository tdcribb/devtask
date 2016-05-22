<?php
/*
Template Name: Front End Dev Task
*/
?>

<?php get_header(); ?>

		<div class="slider">
			<div class="container-fluid">
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

<?php get_footer(); ?>


