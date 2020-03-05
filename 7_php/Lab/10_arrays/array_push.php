<?php
// 4_24.php
$stack = array();
array_push($stack, 'orange');
array_push($stack, 'apple');
array_push($stack, 'banana');
print_r($stack);
$fruit = array_pop($stack);
print_r($stack);
