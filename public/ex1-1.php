<?php
//print a list of the textual representation of numbers without using if/else
//initialise an array to hold the values
$numArray = [];
//set the array indexes to the textual representation of the numbers
$numArray[0] = 'Zero';
$numArray[1] = 'One';
$numArray[2] = 'Two';
$numArray[3] = 'Three';
$numArray[4] = 'Four';
$numArray[5] = 'Five';
$numArray[6] = 'Six';
$numArray[7] = 'Seven';
$numArray[8] = 'Eight';
$numArray[9] = 'Nine';

echo '<ul>';

//use a loop to iterate through and print the values, using the built in count function
for ($i = 0; $i < count($numArray); $i++) {
    echo '<li>' . $numArray[$i] . '</li>';
}
echo '</ul>';