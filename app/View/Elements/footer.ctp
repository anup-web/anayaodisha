	<div id="footer">
	 	<div class="footer green-bg">
	 		<!--<div class="distress-top" style="background-position: -23px top;"></div>-->
	 		<div class="container">
				<div class="row top-padding-20 bottom-padding">
					<div class="col-sm-3">
						<div class="footer-quick-info">
							<h3>Essential</h3> 
							<ul class="quick-info-item">
								<li><a href="<?php echo $this->Html->url('/about-odisha/weather-of-odisha');?>">Weather</a></li>
								<li><a href="<?php echo $this->Html->url('/travel-odisha/by-air');?>">Air Travel to and in Odisha</a></li>
								<li><a href="<?php echo $this->Html->url('/travel-odisha/by-rail');?>">Trains in Odisha</a></li>
								<li><a href="<?php echo $this->Html->url('/under-construction');?>">Car hire in Odisha</a></li>
								<li><a href="<?php echo $this->Html->url('/under-construction');?>">Book your stay</a></li>
							</ul>
						</div>
					</div>	
					
					<div class="col-sm-3">
						<div class="footer-quick-info">
							<h3>Good to know</h3> 
							<ul class="quick-info-item">
								<li><a href="<?php echo $this->Html->url('/about-odisha/regional-tourist-offices');?>">Tourist information centers</a></li>
								<li><a href="<?php echo $this->Html->url('/about-odisha/people-of-odisha');?>">People of Odisha</a></li>
								<li><a href="<?php echo $this->Html->url('/about-odisha/languages-in-odisha');?>">Laguage in Odisha</a></li>
								<li><a href="<?php echo $this->Html->url('/about-odisha/geography-of-odisha');?>">Geography of Odisha</a></li>
								<li><a href="<?php echo $this->Html->url('/about-odisha/history-of-odisha');?>">History of Odisha</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="footer-quick-info">
							<h3>About Anaya</h3>
							<ul class="quick-info-item">
								<li><a href="<?php echo $this->Html->url('/about-us');?>">Who we are</a></li>
								<li><a href="<?php echo $this->Html->url('/what-we-do');?>">What we do</a></li>
								<li><a href="<?php echo $this->Html->url('/contact-us');?>">Reach us</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="footer-quick-info">
							<h3>Share</h3> 
							<ul class="social-network">
	    						<li class="facebook"><a href="https://www.facebook.com/AnayaOdisha" target="_blank">Facebook</a></li>
	    						<li class="twitter"><a href="https://twitter.com/AnayaOdisha" target="_blank">Twitter</a></li>
	    						<li class="googleplus"><a href="">Google+</a></li>
	    						<li class="instagram"><a href="">Instagram</a></li>
	    						<li class="youtube"><a href="">YouTube</a></li>
	    					</ul>
						</div>
					</div>
					
				</div>
				
				<div class="row bottom-padding">
					<div class="col-sm-3">
						<div class="footer-quick-info">
							<h3 class="top-padding">Network</h3>
							<ul class="quick-info-item">
								<li><a href="http://www.orissasociety.org/" target="_blank">Odisha Society of USA</a></li>
								<li><a href="http://www.odishasocietyuk.org/" target="_blank">Odisha Society of UK</a></li>
								<li><a href="http://www.oscwebsite.com/" target="_blank">Odisha Society of Canada</a></li>
								<li><a href="http://odiasocietyofireland.org/" target="_blank">Odisha Society of Ireland</a></li>
							</ul>
						</div>	
					</div>	
					<div class="col-sm-3">
						<div class="footer-quick-info">
							<h3 class="top-padding">&nbsp;</h3>
							<ul class="quick-info-item">
								<li><a href="https://www.facebook.com/bahrainodiasociety/" target="_blank">Bahrain Odia Society</a></li>
								<li><a href="https://www.facebook.com/gulf.odiasamaj/" target="_blank">Gulf Odia-Samaj</a></li>
								<li><a href="http://www.singodia.org/" target="_blank">Singapore Odia Society</a></li>
								<li><a href="http://www.abudhabiodia.org/" target="_blank">Abu dhabi Odia Society</a></li>
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
							Made with <i class="fa fa-heart"></i> by <a href="http://www.aranaxweb.com" target="_blank">Aranax Technologies</a>
						</div>
					</div>	
				</div>
			</div>		
	 	</div>
	</div>

</body>
<?php
	echo $this -> Html -> script('jquery-1.9.1.min');
	echo $this -> Html -> script('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
	echo $this -> Html -> script('jquery-ui-1.10.3.custom.min');
	echo $this -> Html -> script('jquery.fadethis.min');
	//echo $this -> Html -> script('https://maps.googleapis.com/maps/api/js?key=AIzaSyDRC_wiMnBhSSApeh2Rm0EUNl1h6mCk9RY&sensor=false');
    echo $this -> Html -> script('supersized.3.2.7.min');
	echo $this -> Html -> script('owl.carousel.min');
	echo $this -> Html -> script('wow.min');
	echo $this -> Html -> script('aranax');

  if( ($this->request->params['controller'] == "gallery") && ($this->request->params['action'] == "index") ) {
      echo $this -> Html -> script('jquery.photobox');
  }
?>
<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,da,de,en,eo,es,fr,hi,ja,nl,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>	
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2ouUmCoRbeUKReL85h1R2BWCxt2YnBdN';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->