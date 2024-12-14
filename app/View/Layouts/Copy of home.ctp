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
		<title><?php echo $this -> fetch('title'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $this -> Html -> meta('icon');

			echo $this -> Html -> css('jquery-ui-1.10.3.custom.min');
			//echo $this -> Html -> css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
			echo $this -> Html -> css('http://localhost/budde/assets/bootstrap/css/bootstrap.min.css');
			echo $this -> Html -> css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
			echo $this -> Html -> css('sutanati');
			echo $this -> Html -> css('mega-menu');

			echo $this -> fetch('meta');
			echo $this -> fetch('css');
		?>
		<meta name="google-site-verification" content="zXA2zIPddbCI3U1YY0CYVH6hus-nuOum-O8j--3u7QI" />
		<meta name="google-translate-customization" content="137b681f16ef47d1-41ea17b58089cb34-g3427001dd61f566e-14"></meta>
	</head>
	<body>
		<div class="">
		<!--
			<div class="site-header-navbar">
						<div class="container">
							<ul class="pull-right">
								<?php echo $this->element('top_navbar'); ?> 
							</ul> 
						</div>         
					</div>
							 -->
		
			<div class="navbar navbar-default navbar-fixed-top stech_megamenu" role="navigation" id="slide-nav">
	    		<div class="container">
	     			<div class="navbar-header">
	      				<a class="navbar-toggle"> 
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
	       				</a>
	      				<?php echo $this->Html->image('anaya-leisure-logo.png', array('alt' => 'Anaya Odisha', 'fullBase' => true));?>
	     			</div>
	     			
	     			<div id="slidemenu">
	      				<ul class="nav navbar-nav">
					    	<?php //echo $this->element('navbar'); ?> 
	      				</ul>    
	      				<ul class="nav navbar-nav navbar-right">
					    	<?php //echo $this->element('top_navbar'); ?> 
					    	<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">English</a>
								<ul class="dropdown-menu">
									<li><a href="#">Deutsch</a></li>
									<li><a href="#">English</a></li>
									<li><a href="#">Español</a></li>
									<li><a href="#">Français</a></li>
									<li><a href="#">中文</a></li>
									<li><a href="#">日本語</a></li>
								</ul>
							</li>
	      				</ul>      
	     			</div>
	    		</div>
	    	</div>	
  		</div>	 <!-- navbar -->
  
  		<div id="page-content">
  			
  			<?php //echo $this->element('home_slider'); ?>
  			<?php echo $this->fetch('content'); ?>
			        
     	</div> 

		<div id="footer">
	     	<div class="footer green-bg">
	     		<div class="distress-top" style="background-position: -23px top;"></div>
	     		<div class="container">
	    			<div class="row top-padding bottom-padding-20">
	    				<div class="col-sm-3">
	    					<div class="quick-info">
	    						<h3>Essential</h3> 
	    						<ul class="quick-info-item">
	    							<li><a href="">Weather</a></li>
	    							<li><a href="">Air Travel to and in Odisha</a></li>
	    							<li><a href="">Ferries and boats in Odisha</a></li>
	    							<li><a href="">Trains in Odisha</a></li>
	    							<li><a href="">Buses and coaches in Odisha</a></li>
	    							<li><a href="">Car hire in Odisha</a></li>
	    							<li><a href="">Book your stay</a></li>
	    						</ul>
	    					</div>
	    				</div>	
	    				
	    				<div class="col-sm-3">
	    					<div class="quick-info">
	    						<h3>Good to know</h3> 
	    						<ul class="quick-info-item">
	    							<li><a href="">Tourist information centers</a></li>
	    							<li><a href="">People of Odisha</a></li>
	    							<li><a href="">Laguage in Odisha</a></li>
	    							<li><a href="">Geography of Odisha</a></li>
	    							<li><a href="">History of Odisha</a></li>
	    						</ul>
	    					</div>
	    				</div>
	    				
	    				<div class="col-sm-3">
	    					<div class="quick-info">
	    						<h3>About Anaya</h3> 
	    						<ul class="quick-info-item">
	    							<li><a href="">Who we are</a></li>
	    							<li><a href="">What we do</a></li>
	    							<li><a href="">Meet us</a></li>
	    						</ul>
	    					</div>
	    				</div>
	    				
	    				<div class="col-sm-3">
	    					<div class="quick-info">
	    						<h3>Share</h3> 
	    						<ul class="social-network">
		    						<li class="facebook"><a href="">Facebook</a></li>
		    						<li class="twitter"><a href="">Twitter</a></li>
		    						<li class="googleplus"><a href="">Google+</a></li>
		    						<li class="instagram"><a href="">Instagram</a></li>
		    						<li class="youtube"><a href="">YouTube</a></li>
		    					</ul>
	    					</div>
	    				</div>
	    				
	    			</div>
	    			
	    			<div class="row bottom-padding">
	    				<div class="col-sm-8">
	    					
	    				</div>	
	    				<div class="col-sm-4">
			    			<div class="tripadvisor">
			    				<h5>Reviews provided by
				    				<a href="http://www.tripadvisor.in/Tourism-g297660-Odisha-Vacations.html">
				    					<?php echo $this->Html->image('TripAdvisor.png', array('alt' => 'TripAdvisor', 'fullBase' => true, 'style' => 'height:32px;'));?>
				    				</a>
			    				</h5>
			    			</div>
			    		</div>
			    	</div>		
	    			
	    		</div>		
	     	</div>
	     	
	     	<div class="copyright">
	     		<div class="container">
	    			<div class="row">
	    				<div class="col-sm-12">
	    					<div class="pull-left">
	    						Copyright &copy; 2015 - Shrisha Events & Leisure Pvt. Ltd. 
	    						<br/>
	    						Powered by: <a href="http://www.sutanatitech.com">Sutanati Technologies</a>
	    					</div>
	    					<div class="pull-right">
	    						
	    					</div>
	    				</div>	
	    			</div>
	    		</div>		
	     	</div>
    	</div>
	</body>
	
	<?php
		echo $this -> Html -> script('jquery-1.9.1.min');
		//echo $this -> Html -> script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
		echo $this -> Html -> script('http://localhost/budde/assets/bootstrap/js/bootstrap.min.js');
		echo $this -> Html -> script('jquery-ui-1.10.3.custom.min');
		echo $this -> Html -> script('jquery.fadethis.min');
		echo $this -> Html -> script('https://maps.googleapis.com/maps/api/js?key=AIzaSyDRC_wiMnBhSSApeh2Rm0EUNl1h6mCk9RY&sensor=false');
		echo $this -> Html -> script('sutanati');	
	?>	
</html>