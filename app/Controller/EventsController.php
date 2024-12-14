<?php
class EventsController extends AppController {
	public $helpers	=	array("Session", "Html", "Form", "String");
	public $uses 	= 	array("Destination", "Event");

	//what-to-see
	public function index() {
		$events = $this->Event->find("all", array('conditions'=>array('event_active'=>1, 'event_start_date >= '=>date("Y-m-d H:i:s"))));
		
		if(sizeof($events) == 0) {
			throw new NotFoundException();
		}
		$this->set("result", $events);		
		$this->set("title_for_layout", "Upcoming Events");
 		$this->layout = "event";
	}
	
	//what-to-see by slug
	public function view($slug) {
		$attraction = $this->Attraction->findByAttractionSlug($slug);
		$otherattractions = $this->Attraction->find("all", array(
																"conditions" => array("Attraction.destination_id" => $attraction["Attraction"]["destination_id"],
																					  "Attraction.attraction_slug != " => $slug
																					 )
																)
													);
		
		if(sizeof($attraction) == 0) {
			throw new NotFoundException();
		}
		$this->set("result", $attraction);	
		$this->set("otherresult", $otherattractions);		
		$this->set("title_for_layout", $attraction["Attraction"]["attraction_name"]);
 		$this->layout = "destination";
	}
	

	
}