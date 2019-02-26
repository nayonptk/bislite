<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bislite
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

<body <?php body_class(); ?>>

<header class="header-area"> 
	<div class="header"> 
		<div class="container">
			<div class="row"> 
				<div class="header-full-width"> 
					<div class="header-logo"> 
						<a href=""><h1>Bis <span>Lite</span></h1></a>
					</div>
					<div class="header-menu"> 
						<ul>
							<li><a href="">home</a></li>
							<li><a href="">about us</a></li>
							<li><a href="">service</a>
									<ul>
										<li><a href=""> web design</a></li>
										<li><a href="">wordPress design</a></li>
										<li><a href="">mobile app devplopment</a></li>
										<li><a href="">internet marketing</a></li>
										<li><a href="">social media management</a></li>
									</ul>
								</li>
							<li><a href="">portfolio</a>
									<ul>
										<li><a href=""> web design</a></li>
										<li><a href="">wordPress design</a></li>
										<li><a href="">mobile app devplopment</a></li>
										<li><a href="">internet marketing</a></li>
										<li><a href="">social media management</a></li>
									</ul>
								</li>
								<li><a href="">blog</a></li>
								<li><a href="">contact us</a></li>								
						</ul>
						<div class="bislite-menu-hover"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

