<?php
class Activity extends AppModel {
	var $name		=	"Activity";
	var $useTable	=	"activities";
	var $primaryKey	= 	"activity_id";
	
 	public $belongsTo = array(
					        	"Activitytype" => array(
														"className"    => "Activitytype",
														"foreignKey"   => "activity_type_id"
													)

    						);
}

?>