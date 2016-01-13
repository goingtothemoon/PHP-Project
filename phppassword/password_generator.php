<?php  

$lower = 'abcdefghijklmnopqrstuvwxyz'; // a character set
$upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '$*?!-';

$chars = $lower . $upper . $numbers . $symbols; // List of all possible characters

// echo rand(1,6); // randomly return a number

function random_char($string) {
	$i = mt_rand(0, strlen($string)-1); // a = 0; subtracting 1 because its a 0 index string
	return $string[$i]; // using characters; changed echo to return
}

echo random_char($chars); // using the function we call in $chars

?>