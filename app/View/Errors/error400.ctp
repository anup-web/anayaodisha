<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('error-landing-banner.jpg', array('alt' => "404 - Page Not Found", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Page Not Found</h1>
				</div>
			</div>
		</div>			
	</div>	
</div>

<div class="container">
	<div class="row top-padding-20 bottom-padding-20">
		<div class="col-md-12">
			<h3>
			<?php printf(
				__d('cake', 'The requested address %s was not found on this server.'),
				"<strong>'{$url}'</strong>"
			); ?>
			</h3>   
			
			Check for a typo in the URL, or 
			<?php 
				echo $this->Html->link(
	   									"go to the site home",
									     array('controller' => 'pages', 'action' => 'index')
									  );
			?>


		</div>
	</div>
</div>	