<?php
$mysqli = new mysqli('127.0.0.1','root','root','Final');
$mysqli->query("SET NAMES 'utf8'");
$mysqli->query("SET CHARACTER_SET_CLIENT=utf8");
$mysqli->query("SET CHARACTER_SET_RESULTS=utf8");
if ($mysqli->connect_errno)
{
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
?>
