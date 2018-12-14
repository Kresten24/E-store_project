<?php
$user = 'kresten';
$password = 'app';
$database = 'Clock-App';
$db = new mysqli('localhost', $user, $password, $database) or die("Connection failed");
// Check connection
if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
?>
