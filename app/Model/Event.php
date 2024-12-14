<?php
class Event extends AppModel {
	var $name		=	"Event";
	var $useTable	=	"events";
	var $primaryKey	= 	"event_id";
	
	public $belongsTo = array(
        "Destination" => array(
            "className" => "Destination",
            "foreignKey" => "destination_id"
        )
    );
	
	function findUpcomingEvents() {
		$result = $this->query("SELECT * FROM attraction_category WHERE slug = '" . $slug . "'");
		return $result;
	}
}

?>