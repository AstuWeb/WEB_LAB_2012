<?php
$today;
//if the variable $today is set to "Monday"....
//the output is "Upper body weight training | 2-mile jog"
switch($today){
	case "Monday":
	echo "Upper body weight training | 2-mile jog";
	break; 
	
	case "Tuesday":
	echo "Lower body weight training (quads) | 2-mile walk";
	break; 

	case "Wednesday":
	echo "Amino Acids supplement | 5 miles on bike";
	break; 

	case "Thursday":
	echo "Upper body workout | 2-mile jog";
	break;
	
	case "Friday":
	echo "Upper body workout | 2-mile jog";
	break; 

	case "Saturday":
	echo "Rest day | 1 Hour Stretching";
	break; 
	//if a case for the $today is set to anything other than what's listed
	//Monday - Friday, the content below will output
	default: 
	echo "No information available for that day...";
	break;
}?>