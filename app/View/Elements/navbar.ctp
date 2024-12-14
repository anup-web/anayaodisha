<?php
  if( ($this->request->params['controller'] == "pages") && ($this->request->params['action'] == "index") ) {

  } else {
?>
<li class="dropdown">
	<a href="<?php echo $this->Html->url('/');?>">Home</a>
</li>
<?php
  }
?>
<li class="dropdown destinations">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle destination-menu-item">Destinations</a>
	<ul class="dropdown-menu">
		<li>
			<div class="stpl-content">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<h3 class="title">Destinations</h3>
						<div class="right-border right-padding">
							<ul class="bottom-padding">
								<li><a href="<?php echo $this->Html->url('/destinations/baripada');?>">Baripada</a></li>
								<li><a href="<?php echo $this->Html->url('/destinations/bhubaneswar');?>">Bhubaneswar</a></li>
								<li><a href="<?php echo $this->Html->url('/destinations/chilika');?>">Chilika</a></li>
								<li><a href="<?php echo $this->Html->url('/destinations/cuttack');?>">Cuttack</a></li>
								<li><a href="<?php echo $this->Html->url('/destinations/daringbadi');?>">Daringbadi</a></li>
								<li><a href="<?php echo $this->Html->url('/destinations/keonjhar');?>">Keonjhar</a></li>
								<!--li><a href="">Konark</a></li>
								<li><a href="">Puri</a></li>
								<li><a href="">Sambalpur</a></li>
								<li><a href="">Similipal</a></li-->
							</ul>
							<div>
								<h4 class="destination-more"><a href="<?php echo $this->Html->url('/destinations');?>" class="btn btn-primary">Explore All <i class="fa fa-angle-double-right"></i></a></h4>
							</div>
						</div>
					</div><!-- end col-3 -->
				
					<div class="col-md-9 col-sm-9">
						<h3 class="title">We Recommend</h3>
						<div class="no-padding">
							<div id="owl-destination">
							    <div class="item destination-carousel-item">
							    	<a href="<?php echo $this->Html->url('/destinations/baripada');?>">
								    	<?php echo $this->Html->image('destinations/thumb-baripada.jpg', array('alt' => 'Anaya Odisha - Destination - Baripada', 'class' => 'img-responsive', 'fullBase' => true));?>
										<h4>Baripada</h4>
										<p>
								    		Baripada is an ideal place to pick up handloom products of Chandanpur and stone carving of Khiching.
								    	</p>
							    	</a>
							    </div>
							    <div class="item destination-carousel-item">
							    	<a href="<?php echo $this->Html->url('/destinations/bhubaneswar');?>">
								    	<?php echo $this->Html->image('destinations/thumb-bhubaneswar.jpg', array('alt' => 'Anaya Odisha - Destination - Bhubaneswar', 'class' => 'img-responsive', 'fullBase' => true));?>
										<h4>Bhubaneswar</h4>
										<p>
								    		The capital of Odisha is a fascinating amalgamation of the ancient and the modern.
								    	</p>
								    </a>	
							    </div>
							    <div class="item destination-carousel-item">
							    	<a href="<?php echo $this->Html->url('/destinations/chilika');?>">
								    	<?php echo $this->Html->image('destinations/thumb-chilika.jpg', array('alt' => 'Anaya Odisha - Destination - Chilka', 'class' => 'img-responsive', 'fullBase' => true));?>
										<h4>Chilika</h4>
										<p>
								    		The largest brackish water lake in Asia and the second largest lagoon in the world.
								    	</p>
								    </a>	
							    </div>
							    <div class="item destination-carousel-item">
							    	<a href="<?php echo $this->Html->url('/destinations/cuttack');?>">
								    	<?php echo $this->Html->image('destinations/thumb-cuttack.jpg', array('alt' => 'Anaya Odisha - Destination - Cuttack', 'class' => 'img-responsive', 'fullBase' => true));?>
										<h4>Cuttack</h4>
										<p>
								    		A 1000 year old city with a hoary past and a bustling commercial heart.
								    	</p>	
								    </a>	
							    </div>
							    <div class="item destination-carousel-item">
							    	<a href="<?php echo $this->Html->url('/destinations/daringbadi');?>">
								    	<?php echo $this->Html->image('destinations/thumb-daringbadi.jpg', array('alt' => 'Anaya Odisha - Destination - Daringbadi', 'class' => 'img-responsive', 'fullBase' => true));?>
										<h4>Daringbadi</h4>
										<p>
								    		Daringbadi is a hill station situated at a height of 3000 ft above sea level.
								    	</p>	
								    </a>	
							    </div>
							    <div class="item destination-carousel-item">
							    	<a href="<?php echo $this->Html->url('/destinations/keonjhar');?>">
								    	<?php echo $this->Html->image('destinations/thumb-keonjhar.jpg', array('alt' => 'Anaya Odisha - Destination - Keonjhar', 'class' => 'img-responsive', 'fullBase' => true));?>
										<h4>Keonjhar</h4>
										<p>
								    		Keonjhar is famous for the Tarini Temple and Sanghagara, Badghagara waterfalls.
								    	</p>
								    </a>	
							    </div>
							    <!--div class="item destination-carousel-item">
							    	<?php echo $this->Html->image('destinations/thumb-konark.jpg', array('alt' => 'Anaya Odisha - Destination - Konark', 'class' => 'img-responsive', 'fullBase' => true));?>
									<h4>Konark</h4>
									<p>
							    		The magnificent Sun Temple at Konark is one of the most stunning monuments of religious architecture in the world.
							    	</p>
							    </div>
							    <div class="item destination-carousel-item">
							    	<?php echo $this->Html->image('destinations/thumb-puri.jpg', array('alt' => 'Anaya Odisha - Destination - Puri', 'class' => 'img-responsive', 'fullBase' => true));?>
									<h4>Puri</h4>
									<p>
							    		One of the four celebrated religious centers of India, Puri, the abode of Lord Jagannath.
							    	</p>
							    </div>
							    <div class="item destination-carousel-item">
							    	<?php echo $this->Html->image('destinations/thumb-sambalpur.jpg', array('alt' => 'Anaya Odisha - Destination - Sambalpur', 'class' => 'img-responsive', 'fullBase' => true));?>
									<h4>Sambalpur</h4>
									<p>
							    		 Abounding in lush green forests, wild-life, exquisite array of hills and waterfalls, folk songs and dances and number of monuments. 
							    	</p>
							    </div>
							    <div class="item destination-carousel-item">
							    	<?php echo $this->Html->image('destinations/thumb-similipal.jpg', array('alt' => 'Anaya Odisha - Destination - Similipal', 'class' => 'img-responsive', 'fullBase' => true));?>
									<h4>Similipal</h4>
									<p>
							    		Similipal a dreamland of Nature in the wilderness and an irresistible destination.
							    	</p>
							    </div-->
							</div>
						</div>	
					</div><!-- end col-4 -->
					
				</div>
			</div>		
		</li>		
	</ul>	
</li>

<li class="dropdown attractions">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle attractions-menu-item">Attractions</a>
	<ul class="dropdown-menu fullwidth">
		<li>
			<div class="stpl-content">
				<div class="row">
					<div class="col-md-3">
						<h3 class="title">Attractions</h3>
						<div class="right-border right-padding">
							<ul>
								<li><a href="<?php echo $this->Html->url('/attractions/adventure-tourism');?>">Adventure Tourism</a></li>
								<li><a href="<?php echo $this->Html->url('/attractions/beach-tourism');?>">Beach Tourism</a></li>
								<li><a href="<?php echo $this->Html->url('/attractions/cultural-tourism');?>">Cultural Tourism</a></li>
								<li><a href="<?php echo $this->Html->url('/attractions/heritage-tourism');?>">Heritage Tourism</a></li>
								<li><a href="<?php echo $this->Html->url('/attractions/religious-tourism');?>">Religious Tourism</a></li>
								<li><a href="<?php echo $this->Html->url('/attractions/tribal-tourism');?>">Tribal Tourism</a></li>
								<li><a href="<?php echo $this->Html->url('/attractions/wildlife-tourism');?>">Wildlife Tourism</a></li>
							</ul>
							<p class="top-padding">&nbsp;</p>
						</div>
					</div><!-- end col-3 -->
					
					<div class="col-md-9">
						<h3 class="title">&nbsp;</h3>
						<div class="row bottom-padding">
							<div class="col-md-3">
								<a href="<?php echo $this->Html->url('/attractions/adventure-tourism');?>" class="caption" data-title="Adventure Tourism" data-description="Trekking, Canoeing, Surfing are few of the adventurous activities.">
									<?php echo $this->Html->image('adventure-tour-small.jpg', array('alt' => 'Anaya Odisha - Adventure Tourism', 'class' => 'img-responsive', 'fullBase' => true));?>
								</a>
							</div>
							
							<div class="col-md-3">
								<a href="<?php echo $this->Html->url('/attractions/beach-tourism');?>" class="caption" data-title="Beach Tourism" data-description="Beaches in Odisha can truly engulf you in a holiday spirit.">
									<?php echo $this->Html->image('beach-tour-small.jpg', array('alt' => 'Anaya Odisha - Beach Tourism', 'class' => 'img-responsive', 'fullBase' => true));?>
								</a>
							</div>
							
							<div class="col-md-3">
								<a href="<?php echo $this->Html->url('/attractions/cultural-tourism');?>" class="caption" data-title="Cultural Tourism" data-description="Stands as meek evidences of an eloquent past and continuing golden present.">
									<?php echo $this->Html->image('culture-tour-small.jpg', array('alt' => 'Anaya Odisha - Cultural Tourism', 'class' => 'img-responsive', 'fullBase' => true));?>
								</a>
							</div>
							
							<div class="col-md-3">
								<a href="<?php echo $this->Html->url('/attractions/heritage-tourism');?>" class="caption" data-title="Heritage Tourism" data-description="Odisha is dotted with with ancient monuments stretching back to 2000 BC.">
									<?php echo $this->Html->image('heritage-tour-small.jpg', array('alt' => 'Anaya Odisha - Heritage Tourism', 'class' => 'img-responsive', 'fullBase' => true));?>
								</a>
							</div>
						</div>	
						
						<div class="row top-padding bottom-padding">
							<div class="col-md-3">
								<a href="<?php echo $this->Html->url('/attractions/religious-tourism');?>" class="caption" data-title="Religious Tourism" data-description="Sacred to all, Odisha is a much revered pilgrimage point for devotees.">
									<?php echo $this->Html->image('religious-tour-small.jpg', array('alt' => 'Anaya Odisha - Religious Tourism', 'class' => 'img-responsive', 'fullBase' => true));?>
								</a>
							</div>
							
							<div class="col-md-3">
								<a href="<?php echo $this->Html->url('/attractions/tribal-tourism');?>" class="caption" data-title="Tribal Tourism" data-description="62 culturally vibrant tribes including 13 primitive tribal groups found in Odisha.">
									<?php echo $this->Html->image('tribal-tour-small.jpg', array('alt' => 'Anaya Odisha - Tribal Tourism', 'class' => 'img-responsive', 'fullBase' => true));?>
								</a>
							</div>
							
							<div class="col-md-3">
								<a href="<?php echo $this->Html->url('/attractions/wildlife-tourism');?>" class="caption" data-title="Wildlife Tourism" data-description="Wide variety of fauna is found in Odisha owing to the environmental factors.">
									<?php echo $this->Html->image('wildlife-tour-small.jpg', array('alt' => 'Wildlife Leisure - Tribal Tourism', 'class' => 'img-responsive', 'fullBase' => true));?>
								</a>
							</div>
							
							<div class="col-md-3">
								<div class="top-padding-30">
									<h4 class="destination-more"><a href="<?php echo $this->Html->url('/attractions');?>" class="btn btn-primary">Explore All <i class="fa fa-angle-double-right"></i></a></h4>
								</div>
							</div>
						</div>
							
					</div><!-- end col-9 -->
				</div>
			</div>
		</li>		
	</ul>	
</li>

<li class="dropdown thingstodo">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle thingstodo-menu-item">Things To Do</a>
	<ul class="dropdown-menu fullwidth">
		<li>
			<div class="stpl-content">
				<div class="row">
					<div class="col-md-3">
						<h3 class="title">Things To Do</h3>
						<div class="right-border right-padding">
							<ul>
								<li><a href="<?php echo $this->Html->url('/what-to-do/arts-and-entertainment');?>">Arts &amp; Entertainment</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/canoeing');?>">Canoeing</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/eat-and-drink');?>">Eat &amp; Drink</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/fishing');?>">Fishing</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/golf');?>">Golf</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/health-and-beauty');?>">Health &amp; Beauty</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/nature-and-wildlife');?>">Nature &amp; Wildlife</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/nightlife');?>">Nightlife</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/shopping');?>">Shopping</a></li>
								<li><a href="<?php echo $this->Html->url('/what-to-do/traditional-music-and-dance');?>">Traditional Music &amp; Dance</a></li>
								<li><a href="<?php echo $this->Html->url('/upcoming-events');?>">Upcoming Events</a></li>
							</ul>
						</div>
					</div><!-- end col-3 -->
					
					<div class="col-md-4">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<?php echo $this->Html->image('sambar-small.png', array('alt' => 'Anaya Odisha Things To Do', 'class' => 'img-responsive', 'fullBase' => true));?>
						</div>	
					</div><!-- end col-4 -->
					
					<div class="col-md-5">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<h2 class="thingstodo-activity-title">Check out all the activities of <strong>Odisha</strong>.</h2>
							<div class="bottom-padding">
								<h4 class="destination-more"><a href="<?php echo $this->Html->url('/what-to-do');?>" class="btn btn-primary">All Experiences <i class="fa fa-angle-double-right"></i></a></h4>
							</div>
							
							<h3 class="title">Upcoming Event</h3>
							<div class="no-padding">
								<?php echo $this->Html->image('events/janmmastami.jpg', array('alt' => 'Anaya Odisha Things To Do', 'class' => 'img-responsive', 'fullBase' => true));?>
							</div>
						</div>	
					</div><!-- end col-4 -->
				</div>
			</div>
		</li>		
	</ul>	
</li>

<li class="dropdown traveltoodisha">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle traveltoodisha-menu-item">Travel To Odisha</a>
	<ul class="dropdown-menu fullwidth">
		<li>
			<div class="stpl-content">
				<div class="row">
					<div class="col-md-3">
						<h3 class="title">How to get there</h3>
						<div class="no-padding">
							<a href="<?php echo $this->Html->url('/travel-odisha/by-air');?>">
								<?php echo $this->Html->image('how-to-get-flight.jpg', array('alt' => 'Anaya Odisha - how to get Odisha', 'class' => 'img-responsive', 'fullBase' => true));?>
							</a>
							<p>Choose from a great range of airlines and destinations to travel to Odisha.</p>
						</div>	
					</div><!-- end col-3 -->
					
					<div class="col-md-3">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<a href="<?php echo $this->Html->url('/travel-odisha/by-rail');?>">
								<?php echo $this->Html->image('how-to-get-train.jpg', array('alt' => 'Anaya Odisha - how to get Odisha', 'class' => 'img-responsive', 'fullBase' => true));?>
							</a>
							<p>Major destinations of Odisha are well connected through Indian Railways.</p>
						</div>	
					</div><!-- end col-3 -->
					
					<div class="col-md-3">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<a href="<?php echo $this->Html->url('/travel-odisha/by-road');?>">
								<?php echo $this->Html->image('how-to-get-car.jpg', array('alt' => 'Anaya Odisha - how to get Odisha', 'class' => 'img-responsive', 'fullBase' => true));?>
							</a>
							<p>Drive your cars through the national and state highways.</p>
						</div>	
					</div><!-- end col-3 -->
					
					<div class="col-md-3">
						<h3 class="title">Travel Information</h3>
						<ul>
							<li><a href="<?php echo $this->Html->url('/travel-odisha/visa-passport-and-embassy-information');?>">Visa, Passport, Embassy Info</a></li>
							<li><a href="<?php echo $this->Html->url('/travel-odisha/customs-and-borders');?>">Customs &amp; Borders</a></li>
							<li><a href="<?php echo $this->Html->url('/travel-odisha/checklist');?>">Your Checklist</a></li>
						</ul>
							
					</div><!-- end col-3 -->
					
				</div>
				
<!--
				<div class="row bottom-padding">
					<div class="col-md-3">
						<h3 class="title">Travel Information</h3>
						<div class="no-padding">
							<a href="">Customs &amp; Borders</a>
						</div>	
					</div><!-- end col-3 --
					
					<div class="col-md-3">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<a href="">Visa, Passport, Embassy Info</a>
						</div>	
					</div><!-- end col-3 --
					
					<div class="col-md-3">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<a href="">Your Checklist</a>
						</div>	
					</div><!-- end col-3 --
					
					<div class="col-md-3">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<a href="">Travel Agents</a>
						</div>	
					</div><!-- end col-3 --
				</div>	-->

			</div>	
		</li>		
	</ul>	
</li>

<li class="dropdown helpnadvice">
	<a href="#" data-toggle="dropdown" class="dropdown-toggle helpnadvice-menu-item">Help &amp; Advice</a>
	<ul class="dropdown-menu fullwidth">
		<li>
			<div class="stpl-content">
				<div class="row">
					<div class="col-md-3">
						<h3 class="title">Help &amp; Advice</h3>
						<div class="right-border right-padding">
							<ul>
								<li><a href="<?php echo $this->Html->url('/about-odisha/discover-odisha');?>">Discover Odisha</a></li>
								<li><a href="<?php echo $this->Html->url('/about-odisha/once-you-are-here');?>">Once you are here</a></li>
								<li><a href="<?php echo $this->Html->url('/about-odisha/travel-essentials');?>">Travel essentials</a></li>
							</ul>
						</div>	
					</div><!-- end col-3 -->
					
					<div class="col-md-4">
						<h3 class="title">Get in touch</h3>
						<div class="no-padding">
							<p>Can we help you with anything else? Find out how to get in touch by email, Facebook and more.</p>
							<h4 class="destination-more"><a href="<?php echo $this->Html->url('/contact-us');?>" class="btn btn-primary">Contact Us <i class="fa fa-angle-double-right"></i></a></h4>
						</div>	
					</div><!-- end col-3 -->
					
					<div class="col-md-5">
						<h3 class="title">&nbsp;</h3>
						<div class="no-padding">
							<h4>Receive the latest news, deals and travel information about all things Odisha!</h4>
							<form id="newsletter-signup" style="margin-left:-14px;" class="col-md-12 col-lg-12 col-xs-offset-1 top-padding">
				            	<div class="input-group">
				                	<input type="text" class="form-control" name="e-mail" id="e-mail" placeholder="Email Address"><span class="input-group-btn">
				                  	<button class="btn btn-inverse btn-blue" name="submit" type="submit">Sign Up</button></span>
				              	</div>
				              	<!-- /input-group-->
				            </form>
						</div>	
					</div><!-- end col-3 -->
				</div>
			</div>
		</li>
	</ul>			
</li>

<li class="">
	<a href="<?php echo $this->Html->url('/gallery');?>">Photo Gallery</a>
</li>
