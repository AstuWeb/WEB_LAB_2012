<?php
// 5_3.php
// User 1 born on October 10th 1980 in Copenhagen Denmark 
date_default_timezone_set("Europe/Copenhagen");
$dob = mktime(0, 0, 0, 10, 10, 1980);

// User 2 looks at the birthday from Los Angeles
date_default_timezone_set("America/Los_Angeles");
echo date("M j Y", $dob). "\n"; 
