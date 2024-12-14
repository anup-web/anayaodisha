<?php
class Destination extends AppModel {
	var $name		=	"Destination";
	var $useTable	=	"destinations";
	var $primaryKey	= 	"destination_id";
	
 	public $hasMany = array(
					        "Attraction" => array(
					            "className" => "Attraction",
					            "conditions" => array("Attraction.attraction_active" => 1),
					            "order" => "Attraction.attraction_name ASC"
					        )
    );
}

?>