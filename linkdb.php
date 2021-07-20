<!DOCTYPE html>
<html>
<head>
<title>Sport Voting System</title>
</head>
<body>
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'vote';

$conn = mysqli_connect($hostname,  $username,  $password, $database) or die('Connecting to MySQL failed');

echo 'database connected';
?>
</body>
</html>