<?php
session_start();
$host = "localhost"; /* Host name */
$user = "admin"; /* User */
$password = "admin"; /* Password */
$dbname = "intellify"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}