
<?php
//Logout
session_start();

$deconnection = $_GET['button'];
echo $deconnection;


session_unset();
session_destroy();

header('location: login.php');

exit();