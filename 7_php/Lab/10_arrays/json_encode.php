<?php
// 4_29.php
$a = array(
  'apple',
  'orange',
  'banana',
  'animal' => 'horse',
  'vechicle' => 'truck'
);
echo serialize($a) . "\n";
echo json_encode($a) . "\n"; 
