<?php
//print_r($otherresult);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('attractions/attractions-landing-banner-' . rand(1,3) . '.jpg', array('alt' => 'Attractions of Odisha', 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Attractions</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Attractions </li>
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
						Odisha is filled with beautiful beaches, fascinating waterfalls, lovely lakes and even has hot water 
						springs that are reputed for their healing abilities. At the same time, Odisha is well known for its 
						rich history and its famed arts and culture. We welcome you to explore the attractions that Odisha 
						has to offer you.
					</p>	
				</div>
			</div>
			
			<div class="row top-padding-20">
				<div class="col-md-4">
					<div class="figure wow fadeInLeft">
						<?php echo $this -> Html -> image('attractions/thumb-adventure.jpg', array('alt' => "Attractions - Adventure Tourism", 'fullBase' => true, 'class' => 'img-responsive')); ?>
						<div class="figurecaption">
							<a href="<?php echo $this->Html->url('/attractions/adventure-tourism');?>">
								<h3>Adventure Tourism</h3>
								<span>Read more</span>
							</a>
						</div>	
					</div>	
				</div>
				
				<div class="col-md-4">
					<div class="figure wow fadeInUp">
						<?php echo $this -> Html -> image('attractions/thumb-beach.jpg', array('alt' => "Attractions - Beach Tourism", 'fullBase' => true, 'class' => 'img-responsive')); ?>
						<div class="figurecaption">
							<a href="<?php echo $this->Html->url('/attractions/beach-tourism');?>">
								<h3>Beach Tourism</h3>
								<span>Read more</span>
							</a>
						</div>	
					</div>	
				</div>
				
				<div class="col-md-4">
					<div class="figure wow fadeInRight">
						<?php echo $this -> Html -> image('attractions/thumb-cultural.jpg', array('alt' => "Attractions - Cultural Tourism", 'fullBase' => true, 'class' => 'img-responsive')); ?>
						<div class="figurecaption">
							<a href="<?php echo $this->Html->url('/attractions/cultural-tourism');?>">
								<h3>Cultural Tourism</h3>
								<span>Read more</span>
							</a>
						</div>	
					</div>	
				</div>
			</div>
			
			<div class="row top-padding-30">
				<div class="col-md-4">
					<div class="figure wow fadeInLeft">
						<?php echo $this -> Html -> image('attractions/thumb-heritage.jpg', array('alt' => "Attractions - Heritage Tourism", 'fullBase' => true, 'class' => 'img-responsive')); ?>
						<div class="figurecaption">
							<a href="<?php echo $this->Html->url('/attractions/heritage-tourism');?>">
								<h3>Heritage Tourism</h3>
								<span>Read more</span>
							</a>
						</div>	
					</div>	
				</div>
				
				<div class="col-md-4">
					<div class="figure wow fadeInUp">
						<?php echo $this -> Html -> image('attractions/thumb-religious.jpg', array('alt' => "Attractions - Religious Tourism", 'fullBase' => true, 'class' => 'img-responsive')); ?>
						<div class="figurecaption">
							<a href="<?php echo $this->Html->url('/attractions/religious-tourism');?>">
								<h3>Religious Tourism</h3>
								<span>Read more</span>
							</a>
						</div>	
					</div>	
				</div>
				
				<div class="col-md-4">
					<div class="figure wow fadeInRight">
						<?php echo $this -> Html -> image('attractions/thumb-tribal.jpg', array('alt' => "Attractions - Tribal Tourism", 'fullBase' => true, 'class' => 'img-responsive')); ?>
						<div class="figurecaption">
							<a href="<?php echo $this->Html->url('/attractions/tribal-tourism');?>">
								<h3>Tribal Tourism</h3>
								<span>Read more</span>
							</a>
						</div>	
					</div>	
				</div>
			</div>

			<div class="row top-padding-30">
				<div class="col-md-4">
					<div class="figure wow fadeInLeft">
						<?php echo $this -> Html -> image('attractions/thumb-wildlife.jpg', array('alt' => "Attractions - Wildlife Tourism", 'fullBase' => true, 'class' => 'img-responsive')); ?>
						<div class="figurecaption">
							<a href="<?php echo $this->Html->url('/attractions/wildlife-tourism');?>">
								<h3>Wildlife Tourism</h3>
								<span>Read more</span>
							</a>
						</div>	
					</div>	
				</div>
				
				<div class="col-md-8">
					<div class="banner-ad top-padding-40">
						<span class="ad-label">Ad</span>
						<div class="ad-frame-wrapper">
							<?php echo $this -> Html -> image('ads/46860.jpg', array('alt' => 'Anaya Odisha - Advertisement', 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
						</div>
					</div>
				</div>
				
			</div>

			
		</div>
		
		<div class="col-md-3">
			<div class="quick-info">
				<h3>In this section</h3>
				<ul>
					<li><a href="">Adventure Tourism</a></li>
					<li><a href="">Beach Tourism</a></li>
					<li><a href="">Cultural Tourism</a></li>
					<li><a href="">Heritage Tourism</a></li>
					<li><a href="">Religious Tourism</a></li>
					<li><a href="">Tribal Tourism</a></li>
					<li><a href="">Wildlife Tourism</a></li>
				</ul>
			</div>
			
			<!--<h3 class="top-padding-20">Contact Information</h3>-->
			
			<div class="banner-ad top-padding-40">
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