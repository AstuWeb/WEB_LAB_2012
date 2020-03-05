<?php
// 5_2.PHP
// Get timestamp for current day and time
$ts = time();
echo $ts . "\n";
echo date("M j Y H:i:s", $ts) . "\n";

// Get timestamp for March 1st 2015 at 00:00:00
$ts = mktime(0, 0, 0, 3, 1, 2015);
echo $ts . "\n";
echo date("M j Y H:i:s", $ts) . "\n";

// Use strtotime() to get a timestamp for a specific day time
$ts = strtotime("first Monday of April 2016");
echo $ts . "\n";
echo date("M j Y H:i:s", $ts) . "\n";
