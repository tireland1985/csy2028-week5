<?php
//create function that takes a single arguement and print whether it is an odd or even number
//ex. isEven.php?number=5
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    }
    else {
        return false;
    }
}
if (isEven($_GET['number'])) {
    echo $_GET['number'] . ' is an even number';
}
else {
    echo $_GET['number'] . ' is not an even number';
}
?>