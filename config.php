<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'user123abc');
define('DB_PASSWORD', 'User123');
define('DB_NAME', 'dawidzielinski');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>