<?php
//create a function that adds two numbers
function sumNumbers($num1, $num2){
	//add arguments passed through function sumNumbers
	$sum = $num1 + $num2;
	echo "Sum of the two numbers $num1 and $num2 is: $sum";
}
//call function sumNumbers
sumNumbers(3,30);
//output: Sum of the two numbers 3 and 30 is: 33
?>