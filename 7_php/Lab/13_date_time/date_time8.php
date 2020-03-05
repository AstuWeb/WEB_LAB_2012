<?php
// 5_17.php

date_default_timezone_set('America/Los_Angeles');
$d = new DateTime();
echo $d->format("M d Y h:i:s a P") . "\n";

$d->modify("2010-10-31");
echo $d->format("M d Y h:i:s a P") . "\n";

// Noon 2 months later
$d->modify("+2 months 12:00");
echo $d->format("M d Y h:i:s a P") . "\n";

$d->modify("-2000 years");
echo $d->format("M d Y h:i:s a P") . "\n";  
