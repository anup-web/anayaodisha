<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('activities/' . $result[0]["Activitytype"]["activity_type_banner_img"], array('alt' => "Things To Do", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1><?php echo $result[0]["Activitytype"]["activity_type_name"];?></h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li><a href="<?php echo $this->Html->url('/what-to-do');?>">Things To Do</a></li>
							<li> <?php echo $result[0]["Activitytype"]["activity_type_name"];?> </li>
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
					<h4 class="thin-header"><?php echo $result[0]["Activitytype"]["activity_type_description"];?></h4>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="activities top-padding top-padding-20">
					<?php
						foreach($result as $val) {
					?>
						<div class="activities-item wow fadeInUp" data-wow-delay="<?php echo rand(0,2);?>s">
							<div class="smallfigure">
								<?php echo $this->Html->image('activities/thumb-' . $val["Activitytype"]["activity_type_slug"] . '.jpg', array('alt' => $val["Activitytype"]["activity_type_name"], 'fullBase' => true, 'class' => 'img-responsive')); ?>
							</div>
							<div class="info">
								<div>
									<?php echo $val["Activitytype"]["activity_type_description"];?>
								</div>
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
						foreach($resulttypes as $val) {
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