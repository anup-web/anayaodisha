<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/landing-banner.jpg', array('alt' => "Discover Odisha", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Customs &amp; Borders</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Customs &amp; Borders </li>
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
					When arriving on India, like other countries, there are some customs and borders procedures you need to know about.
				</h4>	
				
				<h3>Customs</h3>
				<p>
					Every passenger entering India has to pass through a Customs check. The passenger has to declare the contents 
					of his baggage in the prescribed Indian Customs Declaration Form at airports the passenger has the option 
					of seeking clearance through the Green Channel or through the Red Channel subject to the nature of goods 
					being carried.
				</p>
				
				Check <a class="find-more" target="_blank" href="http://www.cbec.gov.in/trvler-guide_ason05feb2015.pdf">customs guide for traveller</a>.
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