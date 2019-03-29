<?php 

class My_lib{
	function getMonths($num){
		switch ($num){
			case 1:
				$mnth = "January";
				break;
			case 2:
				$mnth = "February";
				break;
			case 3:
				$mnth = "March";
				break;
			case 4:
				$mnth = "April";
				break;
			case 5:
				$mnth = "May";
				break;
			case 6:
				$mnth = "June";
				break;
			case 7:
				$mnth = "July";
				break;
			case 8:
				$mnth = "August";
				break;
			case 9:
				$mnth = "September";
				break;
			case 10:
				$mnth = "October";
				break;
			case 11:
				$mnth = "November";
				break;
			case 12:
				$mnth = "December";
				break;	
			default:
				$mnth = 'NA';
		}

		return $mnth;
	}
}