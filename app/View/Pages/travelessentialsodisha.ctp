<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/landing-banner.jpg', array('alt' => "Discover Odisha", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Travel Essentials</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Travel Essentials </li>
						</ul>
					</div>
				</div>
			</div>
		</div>			
	</div>	
</div>

<div class="container">
	<div class="row top-padding-20 bottom-padding-40">
		<div class="col-md-4">
			<div class="figure wow fadeInLeft">
				<?php echo $this -> Html -> image('pages/travel-essentials-languages.jpg', array('alt' => "Travel Essentials - Languages in Odisha", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Languages in Odisha</h3>
					<p>
						 Listen up! We speak English and other regional languages on Odisha.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/languages-in-odisha');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
		<div class="col-md-4">	
			<div class="figure wow fadeInRight">
				<?php echo $this -> Html -> image('pages/travel-essentials-public-holidays.jpg', array('alt' => "Travel Essentials - Public Holidays", 'fullBase' => true, 'class' => 'img-responsive')); ?>
			<div class="figurecaption">
					<h3>Public Holidays</h3>
					<p>
						 See if Odisha is on holiday with you.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/public-holidays');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
		<div class="col-md-4">
			<div class="figure wow fadeInLeft">
				<?php echo $this -> Html -> image('pages/travel-essentials-medical-info.jpg', array('alt' => "Travel Essentials - Medical information", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Medical Information</h3>
					<p>
						 To enjoy your stay at Odisha, here's some need to know medical info.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/medical-information');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
	</div>	
	
	<div class="row bottom-padding-20">
		<div class="col-md-12 text-center">
			<form id="newsletter-signup">
				<h3 class=""><span>Holiday ideas, news, offers… sign up for our ezine and we’ll keep you in touch with</span> Odisha.</h3>
			
				<div class="input-group col-md-6 col-md-offset-3">
					<input type="text" class="form-control" name="e-mail" id="e-mail" placeholder="Email Address">
					<span class="input-group-btn">
						<button class="btn btn-inverse btn-grey" name="submit" type="submit">
							Sign Up
						</button></span>
				</div>
				<!-- /input-group-->
			</form>
		</div>
	</div>		
</div>		

<?php echo $this->element('footer'); ?> 

<script type="text/javascript">
	getCurrentWeather(20.3008842, 85.8204531);
</script>

</html>