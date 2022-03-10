<?php session_start(); ob_start();
unset($_SESSION['user_id']);
unset($_SESSION['email']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
//or
session_destroy();
header('location: login.php');
