<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/visa-passport-embassy-landing-banner.jpg', array('alt' => "Visa, Passport and Embassy Information", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Visa, Passport and Embassy Information</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Visa, Passport and Embassy Information </li>
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
					You'll need to check India's visa and passport requirements before you begin your visit.
				</h4>	
				<p>
					There are different requirements for different nationalities when visiting India, so here’s what you need to 
					know when travelling to India.
				</p>
				
				<h3>Passports</h3>
				<p>
					You will need a valid passport to enter India. ALWAYS check 
					what form of ID is required with your individual airline, ferry company or travel agent before travelling. 
				</p>
				
				<h3>Visas</h3>
				<p>
    				All foreign nationals entering India are required to possess a valid international travel document 
    				in the form of a national passport with a valid visa obtained from an Indian Mission or Post abroad.
				</p>
				
				<h5>
					Tourist Visa on Arrival Facility is available for holders of passport of following countries:
				</h5>	
				<p>
					Australia, Brazil, Cambodia, Cook Islands, Djibouti, Fiji, Finland, Germany, Guyana, Indonesia, Israel, Japan, Jordan, Kenya, Kiribati, Laos, Luxembourg, Marshall Islands, Mauritius, Mexico, Micronesia, Myanmar, Nauru,
					New Zealand,Niue Island, Norway, Oman, Palau, Palestine, Papua New Guinea, Philippines, Republic of Korea,
					Russia, Samoa, Singapore, Solomon Islands,Thailand, Tonga, Tuvalu, UAE, Ukraine, USA, Vanuatu, Vietnam. 
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