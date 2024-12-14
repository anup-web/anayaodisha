<?php
class Attraction extends AppModel {
	var $name		=	"Attraction";
	var $useTable	=	"attractions";
	var $primaryKey	= 	"attraction_id";
	
	public $belongsTo = array(
        "Destination" => array(
            "className" => "Destination",
            "foreignKey" => "destination_id"
        )
    );
	
	
	//find attraction category info
	public function findAttractionCategoryInfoBySlug($slug) {
		//$db = $this->getDataSource();
		$result = $this->query("SELECT * FROM attraction_category WHERE slug = '" . $slug . "'");
		return $result;
	}
}

?>