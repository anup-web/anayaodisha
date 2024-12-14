<?php
class AttractionsController extends AppController {
	public $helpers	=	array("Session", "Html", "Form", "String");
	public $uses 	= 	array("Destination", "Attraction");

	//what-to-see
	public function index() {
		$attractions = $this->Attraction->find("all");
		
		if(sizeof($attractions) == 0) {
			throw new NotFoundException();
		}
		$this->set("result", $attractions);		
		$this->set("title_for_layout", "What to see");
 		$this->layout = "destination";
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
	
	//attractions landing page
	public function tourism() {
		$this->set("title_for_layout", "Attractions");
 		$this->layout = "destination";
	}
	
	
	//attraction type 
	public function tourismtype($slug) {
		$attraction_category_info = $this->Attraction->findAttractionCategoryInfoBySlug($slug);
		$attractions = $this->Attraction->findAllByAttractionCategory($attraction_category_info[0]["attraction_category"]["id"]);
		
		if(sizeof($attraction_category_info) == 0) {
			throw new NotFoundException();
		}
		
		$this->set("resultcategory", $attraction_category_info);
		$this->set("result", $attractions);		
		$this->set("title_for_layout", $attraction_category_info[0]["attraction_category"]["name"]);
		$this->set("attraction_category", $attraction_category_info[0]["attraction_category"]["name"]);
 		$this->layout = "destination";
	}	
	

	
}