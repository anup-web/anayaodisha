<div class="page-header">
	<div class="page-banner">
		<?php echo $this -> Html -> image('pages/trip-plan-landing-banner.jpg', array('alt' => "Trip Enquiry", 'fullBase' => true, 'class' => 'img-responsive', 'align' => 'center')); ?>
	</div>
	<div class="page-heading">
		<div class="container">
			<div class="row top-padding bottom-padding">
				<div class="col-md-12">
					<h1>Trip Enquiry</h1>
					<div class="breadcrumbs">
						<p>
							You are here:
						</p>
						<ul class="breadcrumb">
							<li>
								<a href="<?php echo $this -> Html -> url('/'); ?>">Home</a>
							</li>
							<li>
								Trip Enquiry
							</li>
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
				<h4 class="thin-header"> Planning an unforgettable experience in Odisha is easy. Simply fill in the form to
				have a copy sent directly to you free of charge. </h4>
				
					<?php echo $this->Session->flash();?>
				<?php
					echo $this -> Form -> create('Page', array('action' => 'tripplan'));
				?>
				
				<h4 class="top-padding-20">Personal Details</h4>
				
				<div class="form-group col-md-3">
					<label for="tpGender">Title</label><br/>
					<?php
						$titleOptions = array('Mr.' => 'Mr.', 'Ms.' => 'Ms.');
						echo $this->Form->select('tpGender', $titleOptions, array('escape' => false));
					?>
				</div>
				
				<div class="form-group col-md-4">
					<label for="tpFirstName">First Name</label>
					<input type="text" class="form-control" name="data[Page][tpFirstName]" id="tpFirstName" placeholder="Enter First Name">
				</div>
				
				<div class="form-group col-md-4">
					<label for="tpSecondName">Last Name</label>
					<input type="text" class="form-control" name="data[Page][tpSecondName]" id="tpSecondName" placeholder="Enter Last Name">
				</div>
				
				<div class="form-group col-md-7">
					<label for="tpEmail">Email Address</label>
					<input type="text" class="form-control" name="data[Page][tpEmail]" id="tpEmail" placeholder="Enter Email Address">
				</div>
				
				<div class="form-group col-md-4">
					<label for="tpPhone">Phone Number</label>
					<input type="text" class="form-control" name="data[Page][tpPhone]" id="tpPhone" placeholder="Enter Phone Number">
				</div>
				
				<div class="form-group col-md-7">
					<label for="tpCity">City</label>
					<input type="text" class="form-control" name="data[Page][tpCity]" id="tpCity" placeholder="Enter City">
				</div>
				
				<div class="form-group col-md-4">
					<label for="tpCountry">Country</label>
					<?php echo $this->Form->select('country', $countries, array('escape' => false));?>
				</div>
				
				<div class="clearfix"></div>
				
				<h4 class="top-padding-20">Tour Details</h4>
				
				<div class="form-group col-md-6">
					<label for="tpDestination">Destination(s)</label>
					<input type="text" name="data[Page][tpDestination]" class="form-control" id="tpDestination">
				</div>
				
				<div class="form-group col-md-5">
					<label for="tpInterest">Interest(s)</label>
					<input type="text" name="data[Page][tpInterest]" class="form-control" id="tpInterest">
				</div>
				
				<div class="clearfix"></div>
				
				<div class="form-group col-md-3">
					<label for="tpArrivalDate">Arrival Date</label>
					<input type="text" name="data[Page][tpArrivalDate]" class="form-control datepicker" id="tpArrivalDate">
				</div>
				
				<div class="form-group col-md-3 col-md-offset-1">
					<label for="tpDepartureDate">Departure Date</label>
					<input type="text" name="data[Page][tpDepartureDate]" class="form-control datepicker" id="tpDepartureDate">
				</div>
				
				<div class="clearfix"></div>
				
				<div class="form-group col-md-4">
					<label for="tpNumberAdult">Number of Persons (12+ years)</label>
					<?php
						$tpNumberAdultOptions = array('1' => '1', '2' => '2', '3' => '3', '4' => '4','5' => '5', '5+' => '5+');
						echo $this->Form->select('tpNumberAdult', $tpNumberAdultOptions, array('escape' => false));
					?>
				</div>
				
				<div class="form-group col-md-4">
					<label for="tpNumberChild">Number of Children (5+ years)</label>
					<?php
						$tpNumberChildOptions = array('1' => '1', '2' => '2', '3' => '3', '4' => '4','5' => '5', '5+' => '5+');
						echo $this->Form->select('tpNumberChild', $tpNumberChildOptions, array('escape' => false));
					?>
				</div>
				
				<div class="form-group col-md-4">
					<label for="tpBudgetCategory">Budget Category</label><br/>
					<?php
						$tpBudgetCategory = array('Budget' => 'Budget', 'Mid Range' => 'Mid Range', 'Luxury' => 'Luxury');
						echo $this->Form->select('tpBudgetCategory', $tpBudgetCategory, array('escape' => false));
					?>
				</div>
				
				<div class="clearfix"></div>
				
				<div class="form-group col-md-11">
					<label for="tpMoreInfo">Additional information</label>
					<textarea name="data[Page][tpMoreInfo]" id="tpMoreInfo" class="form-control"></textarea>
				</div>
				
				
				<div class="clearfix"></div>
				<div class="form-group col-md-4">
					<button type="button" class="btn btn-primary btn-sm btn-submit">Submit</button>
					<input type="hidden" name="data[Page][tpCountry]" id="tpCountry"/>
				</div>
				

				<?php echo $this -> Form -> end(); ?>
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

<?php echo $this -> element('footer'); ?>

<script type="text/javascript">
$(function() {
     // $.datepicker.setDefaults($.datepicker.regional['en']);
      $('#tpArrivalDate').datepicker({
      		dateFormat: "dd-mm-yy",
		    changeMonth: true,
			changeYear: true,
			yearRange:'<?php echo date('Y');?>:<?php echo date('Y', strtotime('+2 years'));?>',
			minDate: '<?php echo date('d-m-Y');?>',
      		onSelect: function(selectedDate) {
	            var date = $(this).datepicker('getDate');
	            $('#tpDepartureDate').datepicker('option', 'minDate', date); // Reset minimum date
	            date.setDate(date.getDate() + 2); // Add 2 days
	            $('#tpDepartureDate').datepicker('setDate', date); // Set as default
      		}
      });
      $('#tpDepartureDate').datepicker({
      		dateFormat: "dd-mm-yy",
		    changeMonth: true,
			changeYear: true,
			minDate: '<?php echo date('d-m-Y');?>',
			yearRange:'<?php echo date('Y');?>:<?php echo date('Y', strtotime('+2 years'));?>',
      		onSelect: function(selectedDate) {
            	$('#tpArrivalDate').datepicker('option', 'maxDate', $(this).datepicker('getDate')); // Reset maximum date
      		}
      });
});


$(document).on('click', '.btn-submit', function() {
	$('.error-msg').remove();
	$('input, select').removeClass('form-error');
	
	var tpGender 			= $('#PageTpGender').val();
	var tpFirstName 		= $('#tpFirstName').val();
	var tpSecondName 		= $('#tpSecondName').val();
	var tpEmail 			= $('#tpEmail').val();
	var tpPhone 			= $('#tpPhone').val();
	var tpCity 				= $('#tpCity').val();
	var country 			= $('#PageCountry').val();
	var tpCountry 			= $('#PageCountry').val();
	var tpDestination 		= $('#tpDestination').val();
	var tpInterest 			= $('#tpInterest').val();
	var tpArrivalDate 		= $('#tpArrivalDate').val();
	var tpDepartureDate 	= $('#tpDepartureDate').val();
	var tpNumberAdult 		= $('#PageTpNumberAdult').val();
	var tpNumberChild 		= $('#PageTpNumberChild').val();
	var tpBudgetCategory 	= $('#PageTpBudgetCategory').val();
	var tpMoreInfo 			= $('#tpMoreInfo').val();
	
	var error = false;
	var msg = "<h4 class='lft-pad-nm'><strong>Ohh!</strong> Change a few things up and try submitting again.</h4>";
	
	if(tpGender == "") {
		error = true;
		$('#PageTpGender').addClass('form-error');
	}
	
	if(tpFirstName == "") {
		error = true;
		$('#tpFirstName').addClass('form-error');
	}
	
	if(tpSecondName == "") {
		error = true;
		$('#tpSecondName').addClass('form-error');
	}
	
	if(tpEmail == "") {
		error = true;
		$('#tpEmail').addClass('form-error');
	}
	
	if(tpPhone == "") {
		error = true;
		$('#tpPhone').addClass('form-error');
	}
	
	if(tpCity == "") {
		error = true;
		$('#tpCity').addClass('form-error');
	}
	
	if(tpCountry == "") {
		error = true;
		$('#PageCountry').addClass('form-error');
	} else {
		error = false;
		$('#tpCountry').val($('#PageCountry option:selected').text());
	}
	
	if(tpDestination == "") {
		error = true;
		$('#tpDestination').addClass('form-error');
	}
	
	if(tpInterest == "") {
		error = true;
		$('#tpInterest').addClass('form-error');
	}
	
	if(tpArrivalDate == "") {
		error = true;
		$('#tpArrivalDate').addClass('form-error');
	}
	
	if(tpDepartureDate == "") {
		error = true;
		$('#tpDepartureDate').addClass('form-error');
	}
	
	if(tpNumberAdult == "") {
		error = true;
		$('#PageTpNumberAdult').addClass('form-error');
	}
	
	if(tpNumberChild == "") {
		error = true;
		$('#PageTpNumberChild').addClass('form-error');
	}
	
	if(tpBudgetCategory == "") {
		error = true;
		$('#PageTpBudgetCategory').addClass('form-error');
	}
	
	
	if(error) {
		$('#PageTripplanForm').before("<div class='error-msg'></div>");
		$('.error-msg').html(msg);
		return false;
	} else {
		$("#PageTripplanForm").submit();
	}
	
});	
	
</script>

<script type="text/javascript">getCurrentWeather(20.3008842, 85.8204531);</script>

</html>