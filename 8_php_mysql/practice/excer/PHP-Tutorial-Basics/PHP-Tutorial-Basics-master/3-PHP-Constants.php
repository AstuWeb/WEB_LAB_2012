<?php
// Defining constant

//Constants are defined using PHP's define() function, note: study magic constants later
//define function has two parameters: name of constant, value of constant
//individual both parameters wrapped by quotes

define("SITE_URL", "https://www.astrarai.com/");
 
// Using constant
echo 'Thank you for visiting - '.SITE_URL;

//echo displays output data to web browser
//'Thank you for visiting - ', is wrapped in a string and will be printed followed by...
//the constent in variable SITE_URL
//Not there is a full stop, period, between the string and variable name in the echo state

?>