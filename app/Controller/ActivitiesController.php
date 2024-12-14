<?php
class ActivitiesController extends AppController {
	public $helpers	=	array("Session", "Html", "Form", "String");
	public $uses 	= 	array("Activity", "Activitytype", "Event");

	//what-to-do
	public function index() {
		$events = $this->Event->find("all", 
										array('conditions'	=>	array('event_active'	=>	1, 
																	  'event_start_date >= '	=>	date("Y-m-d H:i:s")
																	  ),
												'limit'		=>	3						  
											)
									);
		
		$activitytypes = $this->Activitytype->find("all");
				
		if(sizeof($activitytypes) == 0) {
			throw new NotFoundException();
		}
		
		$this->set("events", $events);
		$this->set("result", $activitytypes);		
		$this->set("title_for_layout", "Things to do");
		$this->layout = "destination";
	}
	
	//what-to-do by slug
	public function view($slug) {
		$activitytypes = $this->Activitytype->find("all");
		$activities = $this->Activitytype->findAllByActivityTypeSlug($slug);
				
		if(sizeof($activities) == 0) {
			throw new NotFoundException();
		}
		
		$this->set("resulttypes", $activitytypes);
		$this->set("result", $activities);	
		$this->set("title_for_layout", $activities[0]["Activitytype"]["activity_type_name"]);
		
 		$this->layout = "destination";
	}

	
}