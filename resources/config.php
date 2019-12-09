<?php

ob_start(); // Enables output buffering and helps in redirection to some other link

session_start(); // enables storing data securely in the $_SESSION[] global array
//session_destroy();
/************DEFINING DATABASE**************/
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "newadmissions");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); //Connects with the database created via phpmyadmin
require_once("functions.php"); //includes the file which can be required by this file

?> 