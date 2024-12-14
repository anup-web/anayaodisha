<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/landing-banner.jpg', array('alt' => "Location Odisha", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Location Odisha</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Location Odisha </li>
						</ul>
					</div>
				</div>
			</div>
		</div>			
	</div>	
</div>

<div class="container">
	<div class="row top-padding-20 bottom-padding-20">
		<div class="col-md-12">
			<div class="row bottom-padding-20">
				<div class="col-md-12">
					<h3>SILSILA, SWITZERLAND</h3>	
					<div class="text-center hidden-xs">
						<iframe width="640" height="360" src="https://www.youtube.com/embed/LgaNBJ2pQOs" frameborder="0" allowfullscreen></iframe>
	                </div>
	                <div class="visible-xs-block ">
	                    <iframe width="320" height="180" src="https://www.youtube.com/embed/LgaNBJ2pQOs" frameborder="0" allowfullscreen></iframe>
	                </div>
				</div>
			</div>
			
			<div class="row bottom-padding-20">
				<div class="col-md-12">
					<h3>Sharukh Khan & Juhi Chawla – RAAM JAANE – SEYCHELLES</h3>	
					<div class="text-center hidden-xs">
						<iframe width="640" height="360" src="https://www.youtube.com/embed/bOKPlCwRVEc" frameborder="0" allowfullscreen></iframe>
	                </div>
	                <div class="visible-xs-block ">
	                    <iframe width="320" height="180" src="https://www.youtube.com/embed/bOKPlCwRVEc" frameborder="0" allowfullscreen></iframe>
	                </div>
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