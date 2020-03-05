<?php
// 5_5.php
$ts = time();
// European
echo date("d/m/Y H:i:s", $ts) . "\n";

// US
echo date("m/d/Y h:i:s a", $ts) ."\n";
