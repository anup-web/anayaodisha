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
					<h1>Once you are here</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Once you are here </li>
						</ul>
					</div>
				</div>
			</div>
		</div>			
	</div>	
</div>

<div class="container">
	<div class="row top-padding-20 bottom-padding-20">
		<div class="col-md-8">
			<div class="figure wow fadeInLeft">
				<?php echo $this -> Html -> image('pages/once-in-odisha-tourist-information-centre.jpg', array('alt' => "Discover Odisha - Regional Tourist Office", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Regional Tourist Office</h3>
					<p>
						A great place to source local information and ask any advice about travelling in Odisha.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/regional-tourist-offices');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
		<div class="col-md-4">	
			<div class="figure wow fadeInRight">
				<?php echo $this -> Html -> image('pages/once-in-odisha-timezone.jpg', array('alt' => "Discover Odisha - Timezone", 'fullBase' => true, 'class' => 'img-responsive')); ?>
			<div class="figurecaption">
					<h3>Timezone</h3>
					<p>
						 Set your watch to local Indian Standard Time.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/timezone');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
	</div>

	<div class="row top-padding-20 bottom-padding-40">
		<div class="col-md-4">
			<div class="figure wow fadeInLeft">
				<?php echo $this -> Html -> image('pages/once-in-odisha-emergency-numbers.jpg', array('alt' => "Discover Odisha - Emergency Numbers", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Emergency Numbers</h3>
					<p>
						 Make a note of the emergency numbers to call when in Odisha.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/emergency-numbers');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
		<div class="col-md-4">	
			<div class="figure wow fadeInUp">
				<?php echo $this -> Html -> image('pages/once-in-odisha-senior-citizen.jpg', array('alt' => "Discover Odisha - Senior citizens", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Senior citizens</h3>
					<p>
						 Avail various discounts available for senior citizens.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/senior-citizens');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
		<div class="col-md-4">	
			<div class="figure wow fadeInRight">
				<?php echo $this -> Html -> image('pages/once-in-odisha-car-rental.jpg', array('alt' => "Discover Odisha - Car Rental", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Car Rental</h3>
					<p>
						 Opt for your favourite car or motorcycle during your stay at Odisha.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/car-rental');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
	</div>	
	
</div>		

<?php echo $this->element('footer'); ?> 

<script type="text/javascript">
	getCurrentWeather(20.3008842, 85.8204531);
</script>

</html>