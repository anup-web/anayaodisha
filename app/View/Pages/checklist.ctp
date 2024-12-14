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
					<h1>Your Odisha Checklist</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Odisha Checklist </li>
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
					Do I need special shoes for walking? What about the weather? What type of currency will I need? 
					Packing for a trip means many questions. Our Travel Checklist has the answers.
				</h4>	
				
				<h3>Clothes</h3>
				<p>
					If you are planning to visit the place during summers, then it is advisable that you take along 
					lightweight cotton clothing. During this time, the sun is quite harsh and the temperature soars. 
					So, make sure to carry sunscreen, sunglasses, hats, etc with you. 
					<br/>
					However, if you are planning your 
					Odisha tour during winter time, then it is better to pack some warm garments. Though the winters are 
					hardly freezing-cold in the state, the atmosphere is chilly and we are sure, you don't want to come 
					down with fever or pneumonia on you vacation.
				</p>
				
				<h3>Gadgets</h3>
				<p>
					Views and picture-perfect moments tend to pop up a lot in Odisha so a camera is a must. Don't forget 
					the battery charger and spare memory cards for it either – a common mistake! 
				</p>
				<p>
					Plugs for all your gadgets are one with two round pins or three round pins (arranged in a triangle)
					 and the electricity supply is 230v 50hz. 
					So it's always a good idea to bring a couple of adapters for your various gadgets.
				</p>
				
				<h3>Currency</h3>
				<p>
					The currency used in India is the Rupee (₹). Visa and Mastercard are credit cards generally accepted. 
					Beware that an American Express card is not as widely accepted. Credit cards can also be used to access 
					money from ATMs. Just look for the symbol on your card that matches the ATM. 
					<br/>
					Traveller's Cheques are not widely used and most banks won't accept them. We advise to bring cash or cards instead.
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