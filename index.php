<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bislite
 */

get_header(); ?>

<section class="slider-area"> 
	<div class="slider"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-xl-12">
					<div class="carousel-slider">
						<div class="main-slider-area owl-carousel">
							<h1><?php echo $redux_demo['slide'][0]['description']; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="service-area"> 
	<div class="service"> 
		<div class="container"> 
			<div class="row"> 

		 <?php $service = new WP_Query(array( 
	          	'post_type' => 'service-post',
	            'posts_per_page' => 4,
	  ));?>
			<?php while($service->have_posts()) : $service->the_post(); ?>
				<!--single-post-service-->
				<div class="col-xl-3"> 
					<div class="single-service-title"> 
						<div class="service-title"> 
							<i class="fas fa-pencil-alt"></i>
							<h3><?php echo the_title();?></h3>
						</div>
						<div class="service-content">
						<p><?php echo wp_trim_words(get_the_content(),27,NULL); ?></p>
						</div>
						<div class="service-read-more"> 
							<i class="fas fa-angle-right"></i>
							<a href="<?php echo the_permalink(); ?>">Read More</a>
						</div>
					</div>
				</div>		<!--single-post-service /-->					
	
				<?php endwhile; ?>

			</div>
		</div>
	</div>
</section>
<section class="latest-work"> 
	<div class="latest"> 
		<div class="container"> 
			<div class="latest-title"> 
				<i class="fas fa-mouse-pointer"></i>
				<h4>latest works</h4>
			</div>
			<div class="all-latest-works owl-carousel">
				<div class="row"> 
					<!--latest thumbnail-->
					<div class="col-xl-3 latest-hob"> 
						<div class="latest-thumbnail"> 
							<img src="<?php echo get_template_directory_uri();?>/img/latest-work.jpg" alt="">
						</div>
						<div class="latest-img-hover"> 
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fas fa-link"></i></a>
						</div>
					</div>	<!--latest thumbnail-->
					<!--latest thumbnail-->
					<div class="col-xl-3 latest-hob"> 
						<div class="latest-thumbnail"> 
							<img src="<?php echo get_template_directory_uri();?>/img/latest-work-img-2.jpg" alt="">
						</div>
						<div class="latest-img-hover"> 
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fas fa-link"></i></a>
						</div>
					</div>	<!--latest thumbnail-->
					<!--latest thumbnail-->
					<div class="col-xl-3 latest-hob"> 
						<div class="latest-thumbnail"> 
							<img src="<?php echo get_template_directory_uri();?>/img/latest-work-img-3.jpg" alt="">
						</div>
						<div class="latest-img-hover"> 
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fas fa-link"></i></a>
						</div>
					</div>	<!--latest thumbnail-->
					<!--latest thumbnail-->
					<div class="col-xl-3 latest-hob"> 
						<div class="latest-thumbnail"> 
							<img src="<?php echo get_template_directory_uri();?>/img/latest-work-img-4.jpg" alt="">
						</div>
						<div class="latest-img-hover"> 
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fas fa-link"></i></a>
						</div>
					</div>	<!--latest thumbnail-->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="Testimonial-area">
	<div class="Testimonial"> 
		<div class="container"> 
			<div class="row full-test"> 
				<div class="col-xl-6"> 
					<div class="Testimonial-title"> 
						<i class="fas fa-sms"></i>
						<h3><?php echo $redux_demo['tmonial-title'];?></h3>
					</div>
					<div class="Testimonial-content"> 
						<p><?php echo $redux_demo['tmonial-content']; ?></p>
						<h6><?php echo $redux_demo['t-name']; ?></h6>
					</div>
				</div>

				<div class="col-xl-6"> 
					<div class="our-client-title"> 
						<i class="fas fa-user-friends"></i>
						<h3><?php echo $redux_demo['client-title'];?></h3>
					</div>
					<div class="our-client-img"> 
						<img src="<?php echo $redux_demo['clients-img1']['url'];?>" alt="">	
						<img src="<?php echo $redux_demo['clients-img2']['url'];?>" alt="">	
						<img src="<?php echo $redux_demo['clients-img3']['url'];?>" alt="">	
						<img src="<?php echo $redux_demo['clients-img4']['url'];?>" alt="">	
						<img src="<?php echo $redux_demo['clients-img5']['url'];?>" alt="">	
						<img src="<?php echo $redux_demo['clients-img6']['url'];?>" alt="">
					</div>
				</div>
			</div>
			<div class="row textimonial-all"> 
				<div class="col-xl-9"> 
					<div class="testimonial-footer"> 
						<p><?php echo $redux_demo['download-content']; ?></p>
					</div>
				</div>
				<div class="col-xl-3"> 
					<div class="download-psd-buttom"> 
						<a href=""><i class="fas fa-download"></i></a>
						<a href=""><h3><?php echo $redux_demo['download-link-name']; ?></h3></a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>






















<?php get_footer();
