<?php
#mysql://b9a6cae58519a9:0d552834@us-cdbr-east-04.cleardb.com/heroku_578ed9c5bdfb235?reconnect=true
$host = 'us-cdbr-east-04.cleardb.com';
$dbname = 'heroku_578ed9c5bdfb235';
$user = 'b9a6cae58519a9';
$pass = '0d552834';
$charset = 'utf8mb4';
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
];

$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset='.$charset,$user,$pass,$options);
