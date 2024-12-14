<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/flights-to-odisha-landing-banner.jpg', array('alt' => "Flights to Odisha", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Flights to Odisha</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Flights to Odisha </li>
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
				<h4 class="thin-header">
					Book a flight to Odisha online or via your local travel agent. You'll be enjoying stunning 
					landscapes, sea shore and meeting friendly locals in no time.
				</h4>	
				<p>
					The Bhubaneshwar / Biju Patnaik Airport in Bhubaneswar (BBI) operates regular flights to major Indian cities and 
					is linked to international destinations through a streamlined schedule of flights. Domestic flights to 6 
					Indian metros, both direct and routed, are run by most of the regular and low cost carriers.
				</p>
				<p>
					Air India operates daily flights to and from Delhi, Mumbai, Bangalore and Hyderabad.
				</p>
				<p>
    				Jet and JetLite (previously Sahara Airlines) operate a direct flight to and from Delhi and 2 flights daily 
    				from Kolkata (one in the morning and one in the evening).
				</p>
				<p>
    				INDIGO Airlines operates daily to Delhi (direct), Mumbai (direct) and Chennai (Via Vizag).
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
	
	<div class="row top-padding-20 bottom-padding-20">
		<div class="col-md-12">
			<div class="text-center ">
				<h2 class=""><span>From the world to</span> Odisha</h2>
				<!-- Map Section -->
				<div id="world_map">
					<?php echo $this -> Html -> image('worldmap.png', array('alt' => 'Anaya Odisha - From world to Odisha', 'fullBase' => true, 'class' => 'img-responsive')); ?>
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