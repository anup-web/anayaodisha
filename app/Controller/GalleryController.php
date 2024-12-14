<?php
class GalleryController extends AppController {
	public $uses = array("Gallery");

	//homepage
 	public function index() {
 	    $galleries = $this->Gallery->find("all");

		if(sizeof($galleries) == 0) {
			throw new NotFoundException();
		}
        $this->set("result", $galleries);
 		$this->set("title_for_layout", "Anaya Odisha Photo Gallery");
 		$this->layout = "gallery";
	}	
	

}