<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >	
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<title><?php echo $this -> fetch('title'); ?> | Anaya Odisha</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $this -> Html -> meta('icon');

			echo $this -> Html -> css('jquery-ui-1.10.3.custom.min');
			echo $this -> Html -> css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
			echo $this -> Html -> css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
			echo $this -> Html -> css('supersized');
			echo $this -> Html -> css('owl.carousel');
			echo $this -> Html -> css('owl.theme');
			echo $this -> Html -> css('gallery');
			echo $this -> Html -> css('animate');
			echo $this -> Html -> css('aranax');

			echo $this -> fetch('meta');
			echo $this -> fetch('css');
		?>
		<style type="text/css">iframe.goog-te-banner-frame{ display: none !important;}</style>
		<style type="text/css">body {position: static !important; top:0px !important;}</style>	
		
		<meta name="google-site-verification" content="zXA2zIPddbCI3U1YY0CYVH6hus-nuOum-O8j--3u7QI" />
		<meta name="google-translate-customization" content="137b681f16ef47d1-41ea17b58089cb34-g3427001dd61f566e-14"></meta>
	</head>
	<body>
	
		<nav class="navbar navbar-fixed-top navbar-default stpl">
			<div class="container">	
				<div class="navbar-header">
					<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo $this->Html->url('/');?>" class="navbar-brand">
						<?php echo $this->Html->image('anaya-logo.png', array('alt' => 'Anaya Odisha', 'fullBase' => true));?>
					</a>
					
				</div>
				
				<div id="utility">
					<div id="location-odisha" class="location-odisha-info top-link">
                        <a href="<?php echo $this->Html->url('/location-odisha');?>">Location Odisha</a>
                    </div>
                    
                    <div id="trip-plan" class="trip-plan-info top-link">
                        <a href="<?php echo $this->Html->url('/plan-your-trip');?>">Plan Your Trip</a>
                    </div>
                    
					<div class="weather-info top-link">
						<span id="weather"></span>
					</div>
					
					<div id="google_translate_element" class="top-link"></div>
							
					<div class="social-links top-link">
						<a class="facebook" target="_blank" href="https://www.facebook.com/AnayaOdisha">
							<i class="fa fa-facebook-square"></i>
						</a>
						<a class="twitter" target="_blank" href="https://twitter.com/AnayaOdisha">
							<i class="fa fa-twitter"></i>
						</a>
						<a class="googleplus" target="_blank" rel="publisher" href="">
							<i class="fa fa-google-plus"></i>
						</a>
						<a class="instagram" target="_blank" rel="publisher" href="">
							<i class="fa fa-instagram"></i>
						</a>
						<a class="youtube" target="_blank" rel="publisher" href="">
							<i class="fa fa-youtube"></i>
						</a>
						<a href="http://www.tripadvisor.in/Tourism-g297660-Odisha-Vacations.html">
							<?php echo $this->Html->image('tripadvisor-icon.png', array('alt' => 'TripAdvisor', 'fullBase' => true));?>
						</a>
					</div>
				</div>
				
				
				<div class="navbar-collapse collapse" id="navbar" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav navbar-right">
						<?php echo $this->element('navbar'); ?> 
					</ul>
				</div><!--/.nav-collapse -->
				
			</div>
		</nav>

	    <div id="page-content">
	  			
			<?php echo $this->fetch('content'); ?>
			        
	 	</div>