<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="janvier1";// Mysql password
$db_name="tech_avenue"; // Database name


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>
