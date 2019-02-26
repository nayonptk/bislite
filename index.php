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
							<h1>We design clean, crisp & memorable icons</h1>
							<h1>We design clean, crisp & memorable icons</h1>
							<h1>We design clean, crisp & memorable icons</h1>
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
				
				<!--single-post-service-->
				<div class="col-xl-3"> 
					<div class="single-service-title"> 
						<div class="service-title"> 
							<i class="fas fa-pencil-alt"></i>
							<h3>Clean Theme</h3>
						</div>
						<div class="service-content">
							<p>Ut nec lorem id orci convallis porta. Donec pharetra neque eu velit dictum molestie. Duis porta gravida augue sed viverra. Quisque at nulla leo, non aliquet mi.</p>
						</div>
						<div class="service-read-more"> 
							<i class="fas fa-angle-right"></i>
							<a href="">Read More</a>
						</div>
					</div>
				</div>		<!--single-post-service /-->					
				<!--single-post-service-->
				<div class="col-xl-3"> 
					<div class="single-service-title"> 
						<div class="service-title"> 
							<i class="fas fa-expand"></i>
							<h3>Responsive Design</h3>
						</div>
						<div class="service-content">
							<p>Ut nec lorem id orci convallis porta. Donec pharetra neque eu velit dictum molestie. Duis porta gravida augue sed viverra. Quisque at nulla leo, non aliquet mi.</p>
						</div>
						<div class="service-read-more"> 
							<i class="fas fa-angle-right"></i>
							<a href="">Read More</a>
						</div>
					</div>
				</div>		<!--single-post-service /-->					
				<!--single-post-service-->
				<div class="col-xl-3"> 
					<div class="single-service-title"> 
						<div class="service-title"> 
							<i class="fas fa-pencil-alt"></i>
							<h3>Fully layerd PSD</h3>
						</div>
						<div class="service-content">
							<p>Ut nec lorem id orci convallis porta. Donec pharetra neque eu velit dictum molestie. Duis porta gravida augue sed viverra. Quisque at nulla leo, non aliquet mi.</p>
						</div>
						<div class="service-read-more"> 
							<i class="fas fa-angle-right"></i>
							<a href="">Read More</a>
						</div>
					</div>
				</div>		<!--single-post-service /-->					
				<!--single-post-service-->
				<div class="col-xl-3"> 
					<div class="single-service-title"> 
						<div class="service-title"> 
							<i class="fab fa-telegram-plane"></i>
							<h3>Ready for coding</h3>
						</div>
						<div class="service-content">
							<p>Ut nec lorem id orci convallis porta. Donec pharetra neque eu velit dictum molestie. Duis porta gravida augue sed viverra. Quisque at nulla leo, non aliquet mi.</p>
						</div>
						<div class="service-read-more"> 
							<i class="fas fa-angle-right"></i>
							<a href="">Read More</a>
						</div>
					</div>
				</div>		<!--single-post-service /-->

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
					<div class="col-xl-3"> 
						<div class="latest-thumbnail"> 
							<img src="<?php echo get_template_directory_uri();?>/img/latest-work.jpg" alt="">
						</div>
						<div class="latest-img-hover"> 
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fas fa-link"></i></a>
						</div>
					</div>	<!--latest thumbnail-->
					<!--latest thumbnail-->
					<div class="col-xl-3"> 
						<div class="latest-thumbnail"> 
							<img src="<?php echo get_template_directory_uri();?>/img/latest-work-img-2.jpg" alt="">
						</div>
						<div class="latest-img-hover"> 
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fas fa-link"></i></a>
						</div>
					</div>	<!--latest thumbnail-->
					<!--latest thumbnail-->
					<div class="col-xl-3"> 
						<div class="latest-thumbnail"> 
							<img src="<?php echo get_template_directory_uri();?>/img/latest-work-img-3.jpg" alt="">
						</div>
						<div class="latest-img-hover"> 
							<a href=""><i class="fas fa-eye"></i></a>
							<a href=""><i class="fas fa-link"></i></a>
						</div>
					</div>	<!--latest thumbnail-->
					<!--latest thumbnail-->
					<div class="col-xl-3"> 
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
						<h3>Testimonials</h3>
					</div>
					<div class="Testimonial-content"> 
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut nulla sapien, at aliquam erat. Sed vitae massa tellus. Aliquam commodo aliquam metus, sed iaculis nibh tempus id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam nec nisi in nisl euismod fringilla.</p>
						<h6>John Travis, CEO, DomainName.com</h6>
					</div>
				</div>

				<div class="col-xl-6"> 
					<div class="our-client-title"> 
						<i class="fas fa-user-friends"></i>
						<h3>Our Clients</h3>
					</div>
					<div class="our-client-img"> 
						<img src="<?php echo get_template_directory_uri();?>/img/client-logo-1.jpg" alt="">	
						<img src="<?php echo get_template_directory_uri();?>/img/client-logo-2.jpg" alt="">	
						<img src="<?php echo get_template_directory_uri();?>/img/client-logo-3.jpg" alt="">	
						<img src="<?php echo get_template_directory_uri();?>/img/client-logo-4.jpg" alt="">	
						<img src="<?php echo get_template_directory_uri();?>/img/client-logo-5.jpg" alt="">	
						<img src="<?php echo get_template_directory_uri();?>/img/client-logo-6.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="row textimonial-all"> 
				<div class="col-xl-9"> 
					<div class="testimonial-footer"> 
						<p>This is a clean and modern, four column website PSD template. You can code it into a Wordpress website, HTML5 responsive website for your personal or client works. So ahead and download this wonderful PSD template! </p>
					</div>
				</div>
				<div class="col-xl-3"> 
					<div class="download-psd-buttom"> 
						<a href=""><i class="fas fa-download"></i></a>
						<a href=""><h3>Download PSD</h3></a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>






















<?php get_footer();
