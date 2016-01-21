<?php  
// An array in PHP is actually an ordered map. A map is a type that associates values to keys.
// returns first forward IP match it finds
function forwarded_ip() {

	// using $server to give values since using local network
 $server = array(
 		'HTTP_X_FORWARDED_FOR' => '4.4.4.4,1.1.1.1',
 		'HTTP_X_FORWARDED' => '2.2.2.2'
 	);

 $keys = array(
    'HTTP_X_FORWARDED_FOR', // most common on top
    'HTTP_X_FORWARDED', 
    'HTTP_FORWARDED_FOR', 
    'HTTP_FORWARDED',
    'HTTP_CLIENT_IP', 
    'HTTP_X_CLUSTER_CLIENT_IP',	
 );

 foreach ($keys as $key) {
 	if (isset($server[$key])) {
 		$ip_array = explode(',', $server[$key]); // explode — Split a string by string
 		foreach ($ip_array as $ip) {
 			$ip = trim($ip); // trim — Strip whitespace (or other characters) from the beginning and end of a string
 			return $ip; // return returns program control to the calling module
 		}
 	}
 }
 return '';
}

// echo forwarded_ip();

$remote_ip = $_SERVER['REMOTE_ADDR'];
$forwarded_ip = forwarded_ip();

?>

Remote IP Address: <?php echo $remote_ip; ?><br />
<br />

<!-- If forwarded_ip is not equal to nothing -->
<?php if ($forwarded_ip != '') { ?> 
	Forwarded For: <?php echo $forwarded_ip; ?><br />
	<br />
<?php } ?>