<?php
//print_r($otherresult);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('attractions/' . $result["Attraction"]["attraction_banner_img"], array('alt' => $result["Attraction"]["attraction_name"], 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1><?php echo $result["Attraction"]["attraction_name"]; ?></h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li><a href="<?php echo $this->Html->url('/destinations');?>">Destinations</a></li>
							<li><a href="<?php echo $this->Html->url('/destinations/' . $result["Destination"]["destination_slug"]);?>"><?php echo $result["Destination"]["destination_name"]; ?></a></li>
							<li> <?php echo $result["Attraction"]["attraction_name"]; ?> </li>
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
					<?php echo $result["Attraction"]["attraction_content"];?>
				</div>
			</div>
			
			<div class="row top-padding-20">
				<div class="col-md-12">
					<h2>Gallery</h2>
					<div class="row destination-attractions top-padding top-padding-20">
						<div class="col-md-4 wow bounceInUp">
						</div>
					</div>	
				</div>
			</div>
			
			<div class="row top-padding-20">
				<div class="col-md-12">
					<h2>Other attractions near <?php echo $result["Destination"]["destination_name"];?></h2>
					<div class="row destination-attractions top-padding top-padding-20">
						<?php
							foreach ($otherresult as $key => $val) {
						?>
						<div class="col-md-4 destination-attraction-item wow bounceInUp" data-wow-delay="<?php echo rand(0,1);?>s">
							<a href="<?php echo $this->Html->url('/what-to-see/' . $val["Attraction"]["attraction_slug"]);?>" class="">
								<?php echo $this->Html->image('attractions/thumb-'. $val["Attraction"]["attraction_banner_img"], array('alt' => $val["Attraction"]["attraction_name"], 'class' => 'img-responsive', 'fullBase' => true));?>
								<h4><?php echo $val["Attraction"]["attraction_name"];?></h4>
							</a>
							<p><?php echo $this->String->firstNwords($val["Attraction"]["attraction_short_desc"], 80);?></p>
							<div class="action">
								<a class="find-more" href="<?php echo $this->Html->url('/what-to-see/' . $val["Attraction"]["attraction_slug"]);?>">Find out more</a>
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
				<h3>In this section</h3>
				<ul>
					<li><a href="<?php echo $this->Html->url('/attractions/adventure-tourism');?>">Adventure Tourism</a></li>
					<li><a href="<?php echo $this->Html->url('/attractions/beach-tourism');?>">Beach Tourism</a></li>
					<li><a href="<?php echo $this->Html->url('/attractions/cultural-tourism');?>">Cultural Tourism</a></li>
					<li><a href="<?php echo $this->Html->url('/attractions/heritage-tourism');?>">Heritage Tourism</a></li>
					<li><a href="<?php echo $this->Html->url('/attractions/religious-tourism');?>">Religious Tourism</a></li>
					<li><a href="<?php echo $this->Html->url('/attractions/tribal-tourism');?>">Tribal Tourism</a></li>
					<li><a href="<?php echo $this->Html->url('/attractions/wildlife-tourism');?>">Wildlife Tourism</a></li>
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
	getCurrentWeather(<?php echo $result["Attraction"]["attraction_latitude"];?>, <?php echo $result["Attraction"]["attraction_longitude"];?>);
</script>

</html>		