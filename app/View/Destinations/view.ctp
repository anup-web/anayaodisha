<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('destinations/' . $result["Destination"]["destination_banner_img"], array('alt' => $result["Destination"]["destination_name"], 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1><?php echo $result["Destination"]["destination_name"]; ?></h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li><a href="<?php echo $this->Html->url('/destinations');?>">Destinations</a></li>
							<li> <?php echo $result["Destination"]["destination_name"]; ?> </li>
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
					<?php echo $result["Destination"]["destination_content"];?>
				</div>
			</div>
			
			<div class="row top-padding-20">
				<div class="col-md-12">
					<h2>Attractions</h2>
					<div class="row destination-attractions top-padding top-padding-20">
						<?php
							foreach ($result["Attraction"] as $key => $val) {
						?>
						<div class="col-md-4 destination-attraction-item wow bounceInUp" data-wow-delay="<?php echo rand(0,2);?>s">
							<a href="<?php echo $this->Html->url('/what-to-see/' . $val["attraction_slug"]);?>" class="">
								<?php echo $this->Html->image('attractions/thumb-'. $val["attraction_banner_img"], array('alt' => $val["attraction_name"], 'class' => 'img-responsive', 'fullBase' => true));?>
								<h4><?php echo $val["attraction_name"];?></h4>
							</a>
							<p><?php echo $this->String->firstNwords($val["attraction_short_desc"], 80);?></p>
							<div class="action">
								<a class="find-more" href="<?php echo $this->Html->url('/what-to-see/' . $val["attraction_slug"]);?>">Find out more</a>
								<a class="map-view pull-right" href="">View on map</a>
							</div>	
						</div>
						<?php
							}
						?>
					</div>	
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<h2 class="how-to-reach-heading">How to reach</h2>
					Your choice of transport will depend on how quickly you want to get from one place to another.
					
					<div class="how-to-reach top-padding top-padding-20">
					<?php
						if($result["Destination"]["destination_by_air"] != "") {
					?>
						<div class="how-to-reach-item by-air wow fadeInUp" data-wow-delay="<?php echo rand(0,2);?>s">
							<div class="smallfigure">
								<?php echo $this->Html->image('travels/how-to-get-flight.jpg', array('alt' => 'How to reach ' . $result["Destination"]["destination_name"] . ' by air', 'fullBase' => true, 'class' => 'img-responsive')); ?>
							</div>
							<div class="info">
								<h4>By Air</h4>
								<?php echo $result["Destination"]["destination_by_air"];?>
							</div>
						</div>	
					<?php
						}
					?>
						
					<?php
						if($result["Destination"]["destination_by_sea"] != "") {
					?>
						<div class="how-to-reach-item by-sea wow fadeInUp" data-wow-delay="<?php echo rand(0,2);?>s">
							<div class="smallfigure">
								<?php echo $this->Html->image('travels/how-to-get-ship.jpg', array('alt' => 'How to reach ' . $result["Destination"]["destination_name"] . ' by sea', 'fullBase' => true, 'class' => 'img-responsive')); ?>
							</div>
							<div class="info">
								<h4>By Sea</h4>
								<?php echo $result["Destination"]["destination_by_sea"];?>
							</div>
						</div>
					<?php
						}
					?>

					<?php
						if($result["Destination"]["destination_by_rail"] != "") {
					?>
						<div class="how-to-reach-item by-rail wow fadeInUp" data-wow-delay="<?php echo rand(0,2);?>s">
							<div class="smallfigure">
								<?php echo $this->Html->image('travels/how-to-get-train.jpg', array('alt' => 'How to reach ' . $result["Destination"]["destination_name"] . ' by rail', 'fullBase' => true, 'class' => 'img-responsive')); ?>
							</div>
							<div class="info">
								<h4>By Rail</h4>
								<?php echo $result["Destination"]["destination_by_rail"];?>
							</div>
						</div>
					<?php
						}
					?>

					<?php
						if($result["Destination"]["destination_by_road"] != "") {
					?>
						<div class="how-to-reach-item by-road wow fadeInUp" data-wow-delay="<?php echo rand(0,2);?>s">
							<div class="smallfigure">
								<?php echo $this->Html->image('travels/how-to-get-car.jpg', array('alt' => 'How to reach ' . $result["Destination"]["destination_name"] . ' by road', 'fullBase' => true, 'class' => 'img-responsive')); ?>
							</div>
							<div class="info">
								<h4>By Road</h4>
								<?php echo $result["Destination"]["destination_by_road"];?>
							</div>
						</div>
					<?php
						}
					?>	
					</div>
				</div>
			</div>
					
			<div class="row">
				<div class="col-md-12">
					<h2>Best time to visit</h2>
					<?php echo $result["Destination"]["destination_season_details"];?>
					<div class="light-yellow-bg wow zoomIn">
						<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=<?php echo $result["Destination"]["destination_latitude"];?>&lon=<?php echo $result["Destination"]["destination_longitude"];?>&name=<?php echo $result["Destination"]["destination_name"];?>&color=#ffffff&font=sans-serif&units=uk"> </iframe>
					</div>
				</div>
			</div>
					
		</div>
		
		
		
		<div class="col-md-3">
			<div class="quick-info">
				<h3>Quick Info</h3>
				<ul>
					<li><strong>Famous For</strong>
						<?php echo $result["Destination"]["destination_famous"];?></li>
					<li><strong>Languages</strong>
						<?php echo $result["Destination"]["destination_languages"];?></li>
					<li><strong>Best Season</strong>
						<?php echo $result["Destination"]["destination_season"];?></li>
					<li><strong>Weather</strong>
						<?php echo $result["Destination"]["destination_weather"];?></li>
					<li><strong>Postal Code</strong>
						<?php echo $result["Destination"]["destination_pincode"];?></li>
					<li><strong>STD Code</strong>
						<?php echo $result["Destination"]["destination_stdcode"];?></li>
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
	getCurrentWeather(<?php echo $result["Destination"]["destination_latitude"];?>, <?php echo $result["Destination"]["destination_longitude"];?>);
</script>

</html>		