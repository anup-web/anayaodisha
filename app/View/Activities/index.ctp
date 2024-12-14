<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('activities/landing-banner.jpg', array('alt' => "Things To Do", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Things To Do</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Things To Do </li>
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
						Perhaps you have already seen many of the <a class="find-more" href="<?php echo $this->Html->url('/attractions');?>">attractions</a> 
						in Odisha, or maybe you are just looking for a whole different type of activity than the classical sightseeing. 
						Active or relaxing. Free, cheap or exclusive. Or maybe you just want to experience the Odisha in a whole new way, 
						in a whole new light, with a guided themed tour, a concert in the evening, or a night at the opera? 
						Either way, there are plenty of ways to experience Odisha and create memories you will never forget.
					</p>
				</div>
			</div>
			
			<div class="row top-padding-20 bottom-padding-40">
				<div class="col-md-12">
					<h2 class="events-header">Upcoming Events</h2>
					<div class="events-wrapper">
						<?php
							if(count($events) > 0) {
								for($i=0; $i<count($events); $i++) {
						?>
							<a class="event-item" href="">
								<div class="inner">
									<div class="front">
										<h4 class="event-date"><?php echo $this->String->getDateFormat($events[$i]["Event"]["event_start_date"]);?></h4>	
										<span class="name"><?php echo $events[$i]["Event"]["event_title"];?></span>
										<span class="city"><?php echo $events[$i]["Destination"]["destination_name"];?></span>
									</div>
									<div class="back">
										<span class="summary">
											<?php echo $events[$i]["Event"]["event_description"];?>
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
					
					<div class="text-center top-padding-20">
						<span class="find-more-events">
							<a class="" href="<?php echo $this->Html->url('/upcoming-events');?>">View More Events</a>
						</span>	
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="col-md-12">
					<div class="activities top-padding top-padding-20">
						<h2 class="events-header bottom-padding-20">Activities</h2>
					<?php
						foreach($result as $val) {
					?>
						<div class="activities-item wow fadeInUp" data-wow-delay="<?php echo rand(0,2);?>s">
							<div class="smallfigure">
								<?php echo $this->Html->image('activities/thumb-' . $val["Activitytype"]["activity_type_slug"] . '.jpg', array('alt' => $val["Activitytype"]["activity_type_name"], 'fullBase' => true, 'class' => 'img-responsive')); ?>
							</div>
							<div class="info">
								<h4><?php echo $val["Activitytype"]["activity_type_name"];?></h4>
								<div>
									<?php echo $val["Activitytype"]["activity_type_description"];?>
								</div>
								<a href="<?php echo $this->Html->url('/what-to-do/' . $val["Activitytype"]["activity_type_slug"]);?>" class="find-more">Find More</a>
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
					<?php
						foreach($result as $val) {
					?>
					<li><a href="<?php echo $this->Html->url('/what-to-do/' . $val["Activitytype"]["activity_type_slug"]);?>"><?php echo $val["Activitytype"]["activity_type_name"];?></a></li>
					<?php
						}
					?>
					<li><a href="<?php echo $this->Html->url('/upcoming-events');?>">Upcoming Events</a></li>
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