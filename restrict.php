<?php $allow = array("123.456.789", "456.789.123", "789.123.456");

if(!in_array($_SERVER['REMOTE_ADDR'], $allow) && !in_array($_SERVER["HTTP_X_FORWARDED_FOR"], $allow)) {

	$retry = 60 * 60; // = 60 minutes

	header("HTTP/1.1 503 Service Unavailable");

	header("Retry-After: $retry");

	echo "<h1>Site update in progress - Please return in 60 minutes!</h1>";

	exit();

} ?>
<!doctype html>
<head>
</head>
<body>
Normal page goes here
