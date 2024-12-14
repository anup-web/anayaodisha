<?php
class PagesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = array("Page", "Gallery");

	//homepage
 	public function index() {
 	    $galleries = $this->Gallery->findAllByGalleryShowHome("1");

        $this->set("galleries", $galleries);
        $this->set("title_for_layout", "Anaya Odisha");
 		$this->layout = "home";
	}
	
	//view pages using slug
	public function view($slug) {
		$page = $this->Page->findByPageSlug($slug);
		
		if(sizeof($page) == 0) {
			throw new NotFoundException();
		}
		$this->set("result", $page);		
		$this->set("title_for_layout", $page["Page"]["page_title"]);
 		$this->layout = "aboutodisha";
	}

    //about us
    public function aboutus() {
        $this->set("title_for_layout", "About Us");
 		$this->layout = "aboutodisha";
	}
	
    //services
    public function services() {
        $this->set("title_for_layout", "What We Do");
 		$this->layout = "aboutodisha";
	}	
	
    //locationodisha
    public function locationodisha() {
        $this->set("title_for_layout", "Location Odisha");
 		$this->layout = "aboutodisha";
	}	
		
    //plan your trip
    public function tripplan() {
    	if ($this->request->is('post')) {
    		//send date to model for email
    		//if email sends, show flash message
    		$msg = $this->Page->sendTripPlanEmail($this->request->data);
    		$this->Session->setFlash(__($msg), 'flash_success');
			$this->redirect("/plan-your-trip");
		}
		$countries = $this->Page->getCountryOptions();
		$this->set("countries", $countries);	
        $this->set("title_for_layout", "Plan Your Trip");
 		$this->layout = "aboutodisha";
	}
	
	//travel by air
	public function travelair() {
		$this->set("title_for_layout", "Getting to Odisha - by air");
 		$this->layout = "aboutodisha";
	}

	//travel by rail
	public function travelrail() {
		$this->set("title_for_layout", "Getting to Odisha - by rail");
 		$this->layout = "aboutodisha";
	}
	
	//travel by road
	public function travelroad() {
		$this->set("title_for_layout", "Getting to Odisha - by road");
 		$this->layout = "aboutodisha";
	}
	
		
	//visa passport,  embassy info
	public function visapassportinfo() {
		$this->set("title_for_layout", "Getting to Odisha - Visa, Passport, Embassy Info");
 		$this->layout = "aboutodisha";
	}	
		
	//customs borders
	public function customsborders() {
		$this->set("title_for_layout", "Getting to Odisha - Customs & Borders");
 		$this->layout = "aboutodisha";
	}
		
	//checklist
	public function checklist() {
		$this->set("title_for_layout", "Getting to Odisha - Your Travel Checklist");
 		$this->layout = "aboutodisha";
	}	
		
	//discover odisha
	public function discoverodisha() {
		$this->set("title_for_layout", "Discover Odisha");
 		$this->layout = "aboutodisha";
	}	
	
	//once here
	public function oncehereodisha() {
		$this->set("title_for_layout", "Once you are in Odisha");
 		$this->layout = "aboutodisha";
	}
	
	//travel essential
	public function travelessentialsodisha() {
		$this->set("title_for_layout", "Travel Essentials");
 		$this->layout = "aboutodisha";
	}	
	
	//contact us
	public function contactus() {
		$this->set("title_for_layout", "Contact Us");
		$this->layout = "anaya";
	}
	
	//under construction
	public function underconstruction() {
		$this->set("title_for_layout", "Under Construction");
	}
}