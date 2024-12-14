<?php
App::uses('Helper', 'View');

class StringHelper extends Helper {
	public function getGender($key) {
		switch($key) {
			case "M":
				$returnVal = "Male";
				break;
			case "F":
				$returnVal = "Female";
				break;
		}
		return $returnVal;
	}

	public function getStatus($key) {
		switch($key) {
			case "1":
				$returnVal = "Active";
				break;
			case "0":
				$returnVal = "Inactive";
				break;
		}
		return $returnVal;
	}


	public function getDateFormat($val, $format='M d, Y') {
		if($val != "") {
			$date = date($format, strtotime($val));
		} else {
			$date = "";
		}
		return $date;
	}

	public function getFormatedAmount($val) {
		return number_format($val, 2, '.', ',');
	}

	public function isweekend($year, $month, $day) {
	    $time = mktime(0, 0, 0, $month, $day, $year);
	    $weekday = date('w', $time);
	    return ($weekday == 0 || $weekday == 6);
	}

	public function getMonthYear($month, $year) {
		return date('F', mktime(0, 0, 0, $month)) . " " . date('Y', mktime(0, 0, 0, 1, 1, $year));
	}

	public function getDate($date) {
		return date('d-M-Y', strtotime($date));
	}

	public function firstNwords($text, $length = 200, $dots = true) {
	    $text = trim(preg_replace('#[\s\n\r\t]{2,}#', ' ', $text));
	    $text_temp = $text;
	    while (substr($text, $length, 1) != " ") { $length++; if ($length > strlen($text)) { break; } }
	    $text = substr($text, 0, $length);
	    return $text . ( ( $dots == true && $text != '' && strlen($text_temp) > $length ) ? '...' : ''); 
	}
}
?>
