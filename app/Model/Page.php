<?php
class Page extends AppModel {
	var $name		=	"Page";
	var $useTable	=	"pages";
	var $primaryKey	= 	"page_id";
	
	//get countries as select list
	function getCountryOptions() {
		$sql = "SELECT iso2, short_name FROM countries ORDER BY short_name";
		$query = $this->query($sql);
        foreach($query as $dropdown)
        {
        	$dropDownList[$dropdown["countries"]["iso2"]] = $dropdown["countries"]["short_name"];
        }
    	$finalDropDown = $dropDownList;
        return $finalDropDown;
	}
	
	
	//send trip planner email
	function sendTripPlanEmail($data) {
		$email_to       = 	"sushri@anayaodisha.com";
		$email_subject  = 	"";
		$name		    =	""; 
		$email 	        = 	""; 
		$phone			= 	""; 
        $city 			= 	"";
        $country 		= 	"";
		$destination 	= 	"";
        $interest 		= 	"";
        $arrival 		= 	"";
        $departure 		= 	"";
        $adult 			= 	"";
        $child 			= 	"";
        $budget 		= 	"";
        $moreinfo 		= 	"";
		$user_msg       =   "";
		
		$email_subject = "New Trip Plan request received";
        
        $name			=	$data["Page"]["tpGender"] . " " . $data["Page"]["tpFirstName"] . " " . $data["Page"]["tpSecondName"]; 
        $email 	    	= 	$data["Page"]["tpEmail"]; 
        $phone			= 	$data["Page"]["tpPhone"]; 
        $city 			= 	$data["Page"]["tpCity"];
        $country 		= 	$data["Page"]["tpCountry"];
		$destination 	= 	$data["Page"]["tpDestination"];
		$interest 		= 	$data["Page"]["tpInterest"];
        $arrival 		= 	$data["Page"]["tpArrivalDate"];
        $departure 		= 	$data["Page"]["tpDepartureDate"];
        $adult 			= 	$data["Page"]["tpNumberAdult"];
        $child 			= 	$data["Page"]["tpNumberChild"];
        $budget 		= 	$data["Page"]["tpBudgetCategory"];
        $moreinfo 		= 	$data["Page"]["tpMoreInfo"];
		
		$email_message = "";
		$email_message .= "Name: ". $this->clean_string($name)."\n";
		$email_message .= "Email: ". $this->clean_string($email)."\n";
		$email_message .= "Phone: ". $this->clean_string($phone)."\n";
		$email_message .= "City: ". $this->clean_string($city)."\n";
		$email_message .= "Country: ". $this->clean_string($country)."\n";
		$email_message .= "Destination(s): ". $this->clean_string($destination)."\n";
		$email_message .= "Interest(s): ". $this->clean_string($interest)."\n";
		$email_message .= "Arrival: ". $this->clean_string($arrival)."\n";
		$email_message .= "Departure: ". $this->clean_string($departure)."\n";
		$email_message .= "Adult: ". $this->clean_string($adult)."\n";
		$email_message .= "Child: ". $this->clean_string($child)."\n";
		$email_message .= "Budget: ". $this->clean_string($budget)."\n";
		$email_message .= "Additional Info: ". $this->clean_string($moreinfo)."\n";		
        
        $user_msg   =   "Thank you for contacting us. <br/>We will be in touch with you very soon.";
		
		// create email headers
		$headers = 'From: '.$email."\r\n".
	 	
		'Reply-To: '.$email."\r\n" .
	 
		'X-Mailer: PHP/' . phpversion();
	 
		@mail($email_to, $email_subject, $email_message, $headers); 
		
		return $user_msg;
	}
	


	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href","script","<",">");
		return str_replace($bad,"",$string);
	}
}

?>