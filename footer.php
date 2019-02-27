<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bislite
 */			
global $redux_demo;

?>

<footer class="footer-area"> 
	<div class="footer"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-xl-3"> 
					<div class="about-us"> 
						<div class="about-text"> 
							<h4 class="contact-ti-style"><?php echo $redux_demo['about-us-title'];?></h4>
							<p><?php echo $redux_demo['about-us-content'];?></p>
						</div>
					</div>
				</div>
				<div class="col-xl-2"> 
					<div class="explore"> 
						<div class="explore-title"> 
							<h4 class="contact-ti-style">explore</h4>
							<?php dynamic_sidebar('sidebar-1'); ?>
						</div>
					</div>
				</div>
				<div class="col-xl-2"> 
					<div class="browser"> 
						<div class="browser-title"> 
							<h4 class="contact-ti-style">browser</h4>
							<?php dynamic_sidebar('sidebar-2'); ?>
						</div>
					</div>
				</div>
				<div class="col-xl-2"> 
					<div class="contact"> 
						<div class="contact-title"> 
							<h4 class="contact-ti-style">contact us</h4>
							<h5>BisLite Inc.</h5>
							<p>Always Street 265 0X - 125 - Canada</p>
							<p>Phone: 987-6543-210 <span>Fax: 987-6543-210</span></p>
						</div>
					</div>
				</div>
				<div class="col-xl-3"> 
					<div class="connect-width"> 
						<div class="connect-title"> 
							<h4 class="contact-ti-style">connect with us</h4>
						</div>
						<div class="connect-social"> 
							
							<div class="connect-social-icon1"> 
								<a href="https://www.facebook.com/jahangirtalikhali"><i class="fab fa-facebook-f"></i></a>
							</div>							
							<div class="connect-social-icon2"> 
								<a href="https://www.facebook.com/jahangirtalikhali"><i class="far fa-futbol"></i></a>
							</div>							
							<div class="connect-social-icon3"> 
								<a href=""><i class="fab fa-pinterest-square"></i></a>
							</div>							
							<div class="connect-social-icon4"> 
								<a href="https://www.linkedin.com/in/nayonptk/"><i class="fab fa-linkedin"></i></a>
							</div>							
							<div class="connect-social-icon5"> 
								<a href=""><i class="fab fa-skype"></i></a>
							</div>							
							<div class="connect-social-icon6"> 
								<a href="https://google.com"><i class="fas fa-share-alt-square"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row"> 
				<div class="col-xl-9"> 
					<div class="copyright"> 
						<p><?php echo $redux_demo['Copyright-content']; ?></p>
					</div>
				</div>
				<div class="col-xl-3"> 
					<div class="footer-logo"> 
						<a href=""><h1>Bis <span>Lite</span></h1></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
