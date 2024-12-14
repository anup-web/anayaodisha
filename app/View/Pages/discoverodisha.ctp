<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/landing-banner.jpg', array('alt' => "Discover Odisha", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Discover Odisha</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Discover Odisha </li>
						</ul>
					</div>
				</div>
			</div>
		</div>			
	</div>	
</div>

<div class="container">
	<div class="row top-padding-20 bottom-padding-20">
		<div class="col-md-7">
			<h4>
				Before travelling to a country you need to know the basic facts.
			</h4>
			<p>
				 Odisha is surrounded by the Indian states of West Bengal to the north-east, Jharkhand to the north, Chhattisgarh 
				 to the west and north-west, Telengana to the south-west and Andhra Pradesh to the south. Odisha also has 485 
				 km of coastline stretched across Bay of Bengal on its east, from Balasore to Ganjam.
			</p>
			<p>Learn about the <a href="<?php echo $this->Html->url('/about-odisha/history-of-odisha');?>" class="find-more">history of Odisha</a>, <a href="<?php echo $this->Html->url('/about-odisha/people-of-odisha');?>" class="find-more">people of Odisha</a>,
				our <a href="<?php echo $this->Html->url('/about-odisha/weather-of-odisha');?>" class="find-more">weather and climate</a>, and read <a href="" class="find-more">visitor information</a> to 
				help you plan your visit.
			</p>	
		</div>	
		
		<div class="col-md-5">
			<div class="figure wow fadeInLeft">
				<?php echo $this -> Html -> image('pages/travel-info.jpg', array('alt' => "Discover Odisha - Travel Information", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<a href="">
						<h3>Travel Information</h3>
					</a>
				</div>	
			</div>
			</div>			
	</div>
	
	<div class="row top-padding-20 bottom-padding">
		<div class="col-md-8">
			<div class="figure wow fadeInLeft">
				<?php echo $this -> Html -> image('pages/discover-odisha-history.jpg', array('alt' => "Discover Odisha - History", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>History of Odisha</h3>
					<p>
						 Odisha has a rich and fascinating history, reflecting our unique mix of tradition and culture.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/history-of-odisha');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
		<div class="col-md-4">	
			<div class="figure wow fadeInRight">
				<?php echo $this -> Html -> image('pages/discover-odisha-people.jpg', array('alt' => "Discover Odisha - People", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>People of Odisha</h3>
					<p>
						 Odisha's friendly and down-to-earth people will be one of the things you treasure most about your visit.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/people-of-odisha');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
	</div>

	<div class="row top-padding-20 bottom-padding-40">
		<div class="col-md-4">
			<div class="figure wow fadeInLeft">
				<?php echo $this -> Html -> image('pages/discover-odisha-weather.jpg', array('alt' => "Discover Odisha - Weather", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Weather of Odisha</h3>
					<p>
						Odisha has mild temperatures, moderately high rainfall, and many hours of sunshine.
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/weather-of-odisha');?>">Read more</a>
					</span>
				</div>	
			</div>
		</div>
		<div class="col-md-8">	
			<div class="figure wow fadeInRight">
				<?php echo $this -> Html -> image('pages/discover-odisha-geography.jpg', array('alt' => "Discover Odisha - Geography", 'fullBase' => true, 'class' => 'img-responsive')); ?>
				<div class="figurecaption">
					<h3>Geography of Odisha</h3>
					<p>
						 You'll find a variety of awesome landscapes in Odisha, all within easy reach of each other.  
					</p>
					<span>
						<a href="<?php echo $this->Html->url('/about-odisha/geography-of-odisha');?>">Read more</a>
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