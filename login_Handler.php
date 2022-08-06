<?php 
require_once 'header.php';
require_once 'auto_Loader.php';

$attemptedLoginName = $_POST['username'];
$attemptedPassword = $_POST['password'];

echo "User: " . $attemptedLoginName . " tried to log in with " . 
    $attemptedPassword . " as the password</br>";

$service = new security_Service($attemptedLoginName, $attemptedPassword);

$loggedIn = $service->authenticate();

if($loggedIn){
    $_SESSION['principal'] = true;
    include "login_Success.php";
}else{
    $_SESSION['principal'] = false;
    include "login_Failed.php";
}