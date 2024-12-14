<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/landing-banner.jpg', array('alt' => "Photo Gallery", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Photo Gallery</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> Photo Gallery </li>
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
			<div class="">
				<h4 class="thin-header">
					Be inspired by few of attractions, destinations of Odisha.
				</h4>	
				
                <ul id="gallery">
				<?php
					foreach($result as $val) {
				?>
					<li class="thumb">
						<a href="<?php echo $this->Html->url('/img/gallery/' . $val["Gallery"]["gallery_photo_name"]);?>">
						    <?php echo $this -> Html -> image('gallery/thumb_' . $val["Gallery"]["gallery_photo_name"], array('alt' => $val["Gallery"]["gallery_caption"], 'fullBase' => true, 'class' => 'sqaure-image img-responsive', 'align' => 'center')); ?>
                        </a>
                    </li>
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

    $('#gallery').photobox('a');
	// or with a fancier selector and some settings, and a callback:
	$('#gallery').photobox('a:first', { thumbs:false, time:0 }, imageLoaded);
	function imageLoaded(){
		console.log('image has been loaded...');
	}

</script>

</html>