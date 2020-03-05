<?php


/*The multidimensional array is an array in which each element can also be an 
array and each element in the sub-array can be an array 
or further contain array within itself and so on.
*/

// Define a multidimensional array
$contacts = array(
    array(
        "name" => "astra 1",
        "email" => "notastrasemail1@mail.com",
    ),
    array(
        "name" => "astra 2",
        "email" => "notastrasemail2@main.com",
    ),
    array(
        "name" => "astra 3",
        "email" => "notastrasemail@@mail.com",
    )
);
// Access nested value
//the full stop before $contracts is there to say select
//select the $contracts array, the 1st element in the mulidimensional array
//select the contents of a the first element in the array and value of the key wihin that element

echo "astra Email-id is: " . $contacts[0]["email"];
?>