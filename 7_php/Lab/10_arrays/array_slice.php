<?php
// 4_26.php
$a = array(
  'apple', 
  'orange', 
  'banana', 
  'animal' => 'horse', 
  'vechicle' => 'truck'
);

print_r(array_slice($a, 2, 2));
print_r(array_slice($a, 2, 2, true));
