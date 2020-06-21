<?php
//User 1
// Er hat am 20 Februar einen Sub für 60 Tage geholt...


$testuser_buy = 4;
$testuser_sub = 30;
$date = date("z");

$testuser_sublenght = $testuser_sub + $testuser_buy - $date;



echo $testuser_sublenght;


?>