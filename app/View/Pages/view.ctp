<?php
	//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/' . $result["Page"]["page_banner_img"], array('alt' => "Discover Odisha", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1><?php echo $result["Page"]["page_title"]; ?></h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> <a href="<?php echo $this->Html->url('/about-odisha/' . $result["Page"]["page_category_slug"]);?>"><?php echo $result["Page"]["page_category"]; ?></a> </li>
							<li> <?php echo $result["Page"]["page_title"]; ?> </li>
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
					<?php echo $result["Page"]["page_description"];?>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">	
			<div class="quick-info">
				<h3>In this section</h3>
				<ul>
					<?php 
						if($result["Page"]["page_category_slug"] == "discover-odisha") {
					?>
					<li><a href="<?php echo $this->Html->url('/about-odisha/history-of-odisha');?>">History of Odisha</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/people-of-odisha');?>">People of Odisha</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/weather-of-odisha');?>">Weather of Odisha</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/geography-of-odisha');?>">Geography of Odisha</a></li>
					<?php
						} elseif($result["Page"]["page_category_slug"] == "once-you-are-here") {
					?>
					<li><a href="<?php echo $this->Html->url('/about-odisha/regional-tourist-offices');?>">Regional Tourist Offices</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/timezone');?>">Timezone</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/emergency-numbers');?>">Emergency Numbers</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/senior-citizens');?>">Senior Citizens</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/car-rental');?>">Car Rental</a></li>
					<?php		
						}elseif($result["Page"]["page_category_slug"] == "travel-essentials") {
					?>
					<li><a href="<?php echo $this->Html->url('/about-odisha/languages-in-odisha');?>">Languages in Odisha</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/public-holidays');?>">Public Holidays</a></li>
					<li><a href="<?php echo $this->Html->url('/about-odisha/medical-information');?>">Medical Information</a></li>
					<?php		
						}
					?>
				</ul>
			</div>
		</div>
		
	</div>
</div>

<?php echo $this->element('footer'); ?> 

<script type="text/javascript">
	getCurrentWeather(20.3008842, 85.8204531);
</script>

</html>				