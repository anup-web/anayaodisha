<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('events/landing-banner.jpg', array('alt' => "Upcoming Events", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Upcoming Events</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li><a href="<?php echo $this->Html->url('/what-to-do');?>">Things To Do</a></li>
							<li> Upcoming Events </li>
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
					<h2 class="events-header">Upcoming Events</h2>
					<div class="events-wrapper">
						<?php
							if(count($result) > 0) {
								for($i=0; $i<count($result); $i++) {
						?>
							<a class="event-item" href="">
								<div class="inner">
									<div class="front">
										<h4 class="event-date"><?php echo $this->String->getDateFormat($result[$i]["Event"]["event_start_date"]);?></h4>	
										<span class="name"><?php echo $result[$i]["Event"]["event_title"];?></span>
										<span class="city"><?php echo $result[$i]["Destination"]["destination_name"];?></span>
									</div>
									<div class="back">
										<span class="summary">
											<?php echo $result[$i]["Event"]["event_description"];?>
										</span>
										<!--span class="learn-more">
											learn more
										</span-->
									</div>
								</div>	
							</a>	
						<?php
								}		
							}else {
								echo "<h4>No Events Available</h4>";
							}
						?>
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-md-3">
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