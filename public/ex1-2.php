<?php
//create a function called showNumber, which takes a single arguement in the form of a number and return it as a string
function showNumber($arg) {
    $number = [];
    $number[0] = 'Zero';
    $number[1] = 'One';
    $number[2] = 'Two';
    $number[3] = 'Three';
    $number[4] = 'Four';
    $number[5] = 'Five';
    $number[6] = 'Six';
    $number[7] = 'Seven';
    $number[8] = 'Eight';
    $number[9] = 'Nine';
    $number[10] = 'Ten';
    return $number[$arg];
}

echo showNumber(1) . '<br>';
echo showNumber(6) . '<br>';
echo showNumber(8) . '<br>';
echo showNumber(10) . '<br>';
?>