<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('destinations/landing-banner.jpg', array('alt' => "Destinations", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Destinations</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Destinations </li>
						</ul>
					</div>
				</div>
			</div>
		</div>			
	</div>	
</div>

<div class="container">
	<div class="row top-padding-20 bottom-padding-20">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<p>
						Orissa or Odisha is a beautiful state situated on the eastern coast of Bay of Bengal. With Bhubaneshwar as its 
						capital city, the state is known for its temples, serene climate, wildlife, picturesque landscapes and art.
					</p>
					<p>
						 It is surrounded by the Indian states of West Bengal to the north-east, Jharkhand to the north, Chhattisgarh 
						 to the west and north-west, Telengana to the south-west and Andhra Pradesh to the south. Odisha also has 485 
						 km of coastline stretched across Bay of Bengal on its east, from Balasore to Ganjam.
					</p>
					<a href="" class="find-more">Read more about Odisha</a>
				</div>
			</div>
			
			<div class="row top-padding-20">
				<div class="col-md-12">
					<h2>Destinations</h2>
					<div class="row destination-attractions top-padding top-padding-20">
						<?php
							foreach ($result as $key => $val) {
						?>
						<div class="col-md-4 destination-attraction-item wow fadeInUp" data-wow-duration="2s">
							<a href="<?php echo $this->Html->url('/destinations/' . $val["Destination"]["destination_slug"]);?>" class="">
								<?php echo $this->Html->image('destinations/thumb-'. $val["Destination"]["destination_banner_img"], array('alt' => $val["Destination"]["destination_name"], 'class' => 'img-responsive', 'fullBase' => true));?>
								<h4><?php echo $val["Destination"]["destination_name"];?></h4>
							</a>
							<p><?php echo $this->String->firstNwords($val["Destination"]["destination_short_desc"], 80);?></p>
							<div class="action">
								<a class="find-more" href="<?php echo $this->Html->url('/destinations/' . $val["Destination"]["destination_slug"]);?>">Find out more</a>
								<a class="map-view pull-right" href="">View on map</a>
							</div>	
						</div>
						<?php
							}
						?>
					</div>	
				</div>
			</div>
			
		</div>
		
		
		
		<div class="col-md-3">
			<div class="quick-info">
				<h3>Quick Info</h3>
				<ul>
					<li><strong>Capital City</strong>
						 	Bhubaneswar</li>
					<li><strong>Area</strong>
						155,820 km<sup>2</sup>
					</li>
					<li><strong>Population</strong>
						41,947,358 (2011 Census)
					</li>	 	
					<li><strong>Languages</strong>
						Oriya, English and Hindi</li>
					<li><strong>Best Season</strong>
						October to March</li>
					<li><strong>Weather</strong>
						 Summer: 45°C Max 28°C Min
						<br>
						Winter: 15°C Max 7°C Min
					</li>
				</ul>
			</div>
			
			<!--<h3 class="top-padding-20">Contact Information</h3>-->
			
			<div class="banner-ad">
				<span class="ad-label">Ad</span>
				<div class="ad-frame-wrapper">
					<?php echo $this -> Html -> image('ads/target.jpg', array('alt' => 'Anaya Odisha - Advertisement', 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
				</div>
			</div>
			
			<div class="banner-ad">
				<span class="ad-label">Ad</span>
				<div class="ad-frame-wrapper">
					<?php echo $this -> Html -> image('ads/target.jpg', array('alt' => 'Anaya Odisha - Advertisement', 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
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