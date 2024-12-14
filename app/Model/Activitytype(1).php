<?php
class Activitytype extends AppModel {
	var $name		=	"Activitytype";
	var $useTable	=	"activitytypes";
	var $primaryKey	= 	"activity_type_id";
	
	public $hasMany = array(
								"Activity" => array(
													"className"    => "Activity",
													"foreignKey"   => "activity_type_id"
												)
							);						
}

?>