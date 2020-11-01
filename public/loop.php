<?php
//ex2-3: take 2 numbers and print everything between them

echo '<ul>';
for ($i = $_GET['start']; $i <=  $_GET['end']; $i++) {
    echo '<li>' . $i . '</li>';
}
echo '</ul>';
?>