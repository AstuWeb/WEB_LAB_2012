<?php
// 4_11.php
$a1 = array('x' => 'orange', 'y' => 'grape', 'z' => 'banana');
$a2 = array('grape', 'banana');
$b1 = array_intersect($a1, $a2);
$b2 = array_intersect($a2, $a1);
print_r($b1);
print_r($b2);
