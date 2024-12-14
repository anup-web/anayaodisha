<?php
//print_r($result);
?>
<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/landing-banner.jpg', array('alt' => "What We Do", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>What We Do</h1>
					<div class="breadcrumbs">
						<p>You are here:</p>
						<ul class="breadcrumb">
							<li><a href="<?php echo $this->Html->url('/');?>">Home</a></li>
							<li> What We Do </li>
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
			<h3>Vision</h3>
			<p>
				To be a leading DESTINATION MANAGEMENT company in tourism, known for partnership, innovation and excellence.
			</p>
			
			<h3>Mission</h3>
			<p>
				We champion tourism and build it into a key economic driver for Odisha.
			</p>
			
			<h3>Overview</h3>
			<p>
				It champions the development of Odisha’s tourism sector, one of the country's key service sectors and economic pillars, 
				and undertakes the marketing and promotion of Odisha as a tourism destination. 
			</p>
			<p>	
				The tourism sector currently contributes a significant portion to  Odisha’s gross domestic product and is a 
				major employment generator. Tourism plays an essential role in reinforcing Odisha’s status as a vibrant global 
				city that is a magnet for capital, businesses and talent. It also enhances the quality and diversity of leisure 
				options for local residents and helps to create a living environment that Odiyas’ can be proud to call home.
			</p>
			<p>	
				ANAYA strives to ensure that tourism remains an important economic pillar through long-term strategic planning, 
				and by forging partnerships, driving innovation and ensuring excellence in the tourism sector. It continues to 
				market Odisha’s multi-faceted appeal as a premier business, leisure, healthcare and education destination, and 
				offer empowering and customised experiences through the "Your Odisha" destination brand. These initiatives are 
				reinforced by its international operations, which build affinity for Odisha through customised and differentiated 
				marketing campaigns. ANAYA also regularly reviews and updates the tourism regulatory framework to ensure its 
				relevance in the current business environment, while providing support and incentives to catalyse the private 
				sector to take the lead in investing for growth.
			</p>
			<p>	
				While ANAYA leads in driving tourism development, it cannot do it alone; continued support from industry players 
				is crucial in ensuring the success and sustainable growth of the sector. In the face of growing challenges such 
				as resource scarcity and increasingly discerning travellers, there is a need to focus on yield-driven quality growth. 
				As such, ANAYA and tourism industry players have to work collaboratively to continue to innovate and create value 
				for visitors. ANAYA also aims to facilitate the sharing of experiences, expertise and resources among industry 
				players to raise industry capability and competitiveness, maximise business opportunities and forge long-term 
				win-win partnerships.
			</p>
			<p>	
				Strong support and active participation from Odisha residents are also imperative to the tourism sector as 
				they are an integral part of Odisha’s identity and appeal. ANAYA will continue to work with tourism industry 
				partners to nurture public engagement as part of its tourism development efforts; every local resident is a 
				potential advocate for tourism and together, their collective ideas and energies can contribute to the 
				sustainable development of the tourism sector.
			</p>
			<p>	
				To navigate the tourism sector through the next phase of growth, ANAYA will be pursuing Quality 
				Tourism - a model of tourism development that emphasises innovative enterprise, local engagement 
				and strong economic contribution.
			</p>
			
				
		</div>
	</div>	
	
</div>		

<?php echo $this->element('footer'); ?>

<script type="text/javascript">
	getCurrentWeather(20.3008842, 85.8204531);
</script>

</html>