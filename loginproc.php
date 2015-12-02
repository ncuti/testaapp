<?php

// Inialize session
session_start();

// Include database connection settings
include('connectdbo.php');

// Retrieve username and password from database according to user's input
$query="SELECT * FROM user WHERE Email = '" .$_POST['email']. "' and password = '" .md5($_POST['password']) . "'";
$login = mysql_query($query);
$result = mysql_fetch_array($login);

// Check username and password match

if ($result['Email'] != null)
{
// Set username session variable
$_SESSION['username'] = $result['Email'];
$_SESSION['status'] = $result['Status'];
$_SESSION['user_id'] = $result['user_Id'];
// Jump to secured page
header('Location: index2.php');
}
else
{
// Jump to login page
header('Location: index.php');
}
?>