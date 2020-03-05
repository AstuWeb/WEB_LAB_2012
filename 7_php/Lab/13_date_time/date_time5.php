<?php
// 5_8.php
$ts = time();

setlocale(LC_TIME, 'en_US');
echo "English: ";
echo strftime("%A %B %e %Y %I:%M:%S %P", $ts) ."\n";

setlocale(LC_TIME, 'de_DE');
echo "German: ";
echo strftime("%A %B %e %Y %H:%M:%S", $ts) ."\n";

setlocale(LC_TIME, 'fr_FR');
echo "French: ";
echo strftime("%A %B %e %Y %H:%M:%S", $ts) ."\n";
