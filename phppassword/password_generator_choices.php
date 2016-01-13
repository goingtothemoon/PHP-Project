<?php  

$lower = 'abcdefghijklmnopqrstuvwxyz'; // a character set
$upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '$*?!-';

$chars = $lower . $upper . $numbers . $symbols; // List of all possible characters

echo $chars;
echo "<br />";

// Can also use PHP range(); Create an array containing a range of elements.

	// implode(); implode — Join array elements with a string.
	// range('A', 'Z'); // Will output A-Z
	// range(0, 9);	 // Will output numbers 0-9

$lower = implode(range('a', 'z')); // Will output a-z
$upper = implode(range('A', 'Z'));
$numbers = implode(range(0, 9));
$symbols = '$*?!-';

$chars = $lower . $upper . $numbers . $symbols;

echo $chars;
 ?>