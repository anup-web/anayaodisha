<?php
class DestinationsController extends AppController {
	public $helpers	=	array("Session", "Html", "Form", "String");
	public $uses 	= 	array("Destination");

	public function index() {
		$destinations = $this->Destination->find("all");
		
		if(sizeof($destinations) == 0) {
			throw new NotFoundException();
		}
		$this->set("result", $destinations);		
		$this->set("title_for_layout", "Destinations");
 		$this->layout = "destination";
	}
		
	public function view($slug) {
		$destination = $this->Destination->findByDestinationSlug($slug);
		
		if(sizeof($destination) == 0) {
			throw new NotFoundException();
		}
		$this->set("result", $destination);		
		$this->set("title_for_layout", $destination["Destination"]["destination_name"]);
 		$this->layout = "destination";
	}

	
}