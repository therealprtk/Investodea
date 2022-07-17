<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
$myid = $_SESSION['myid'];
$compname = $_SESSION['compname'];

$mymail = $_SESSION['myemail'];
$myphone = $_SESSION['myphone'];
$comptype = $_SESSION['comptype'];

$state = $_SESSION['mystate'];
$desc = $_SESSION['mydesc'];
$logo = $_SESSION['avatar'];
$mylogin = $_SESSION['lastlogin'];
$myrole = $_SESSION['role'];

$mytitle = $_SESSION['comptype'];
$myweb = $_SESSION['website'];

$user_online = true;	
}else{
$user_online = false;
}
?>