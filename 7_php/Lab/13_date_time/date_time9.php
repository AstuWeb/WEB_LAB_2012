<?php
// 5_23.php
$ts1 = strtotime("2000-06-15 20:30:00");
$ts2 = strtotime("2005-03-18 14:15:30");

$d1 = new DateTime();
$d1->setTimestamp($ts1);
echo $d1->format("Y-m-d H:i:s") . "\n";
$d2 = new DateTime();
$d2->setTimestamp($ts2);
echo $d2->format("Y-m-d H:i:s") . "\n";

$diff = $d1->diff($d2);
echo $diff->format("Years: %y, Months: %m, days: %d %H:%I:%S") . "\n";
