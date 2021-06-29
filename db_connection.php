<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'portfolio');

define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'bwdVjv2xHE');
define('DB_PASSWORD', 'hofhBDePT7');
define('DB_NAME', 'bwdVjv2xHE');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
