<?php

session_start();
require_once('twitteroauth/twitteroauth.php');
define('CONSUMER_KEY', '');
define('CONSUMER_SECRET', '');
define('access_token', '');
define('access_token_secret', '');
date_default_timezone_set('Asia/Bangkok');
$enggar   = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday","Sunday");
$hakim = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$today = date('l, F j, Y');
$now = $enggar[date('N')] . ", " . date('j') . " " . $hakim[(date('n')-1)] . " " . date('Y');
$time = gmdate("H:i:s",time() +7*3600); 
$tweet = "$now $time";
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, access_token, access_token_secret);
$connection->post('statuses/update', array('status' => $tweet));
echo "<center>done</center>";

?>