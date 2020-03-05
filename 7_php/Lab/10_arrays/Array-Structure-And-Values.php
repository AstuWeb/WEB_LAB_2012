<?php
//viewing array structures and values
//var_dump() or print_r(). The print_r()

$names = array("astra","rai", "daniels" );

/*
print_r($names);

output
Array
(
    [0] => astra
    [1] => rai
    [2] => daniels
)
*/
var_dump($names);
/*
var dump will give number of elements in array
This output shows the data type of each element
such as a string of 6 characters, in addition to the key and value
array(3) {
  [0]=>
  string(5) "astra"
  [1]=>
  string(3) "rai"
  [2]=>
  string(7) "daniels"
}
*/
?>