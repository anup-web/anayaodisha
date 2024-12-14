<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/roads-to-odisha-landing-banner.jpg', array('alt' => "Roads to Odisha", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Roads to Odisha</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Roads to Odisha </li>
						</ul>
					</div>
				</div>
			</div>
		</div>			
	</div>	
</div>

<div class="container">
	<div class="row top-padding-20 bottom-padding-20">
		<div class="col-md-9 top-padding">
			<div class="">
				<p>
					Discover magnificent Odisha for yourself, travelling through major highways, country roads and scenic routes 
					spread across some of the world's most spectacular terrain. 
				</p>
				<p>
					Taxis or hired cars are available in important cities and towns. 
				</p>
			</div>
		</div>
		<div class="col-md-3">	
			<div class="quick-info">
				<h3>In this section</h3>
				<ul>
					<li><a href="<?php echo $this->Html->url('/travel-odisha/by-air');?>">Travel by Flights</a></li>
					<li><a href="<?php echo $this->Html->url('/travel-odisha/by-rail');?>">Travel by Rails</a></li>	 	
					<li><a href="<?php echo $this->Html->url('/travel-odisha/by-road');?>">Travel by Roads</a></li>
					<li><a href="<?php echo $this->Html->url('/travel-odisha/visa-passport-and-embassy-information');?>">Visa, Passport, Embassy Info</a></li>
					<li><a href="<?php echo $this->Html->url('/travel-odisha/customs-and-borders');?>">Customs &amp; Borders</a></li>
					<li><a href="<?php echo $this->Html->url('/travel-odisha/checklist');?>">Your Checklist</a></li>
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