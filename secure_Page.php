<?php

include_once 'header.php';

if(isset($_SESSION["principle"]) == false || $_SESSION["principle"] == NULL
    || $_SESSION("principle") == false){
    header("location: login.html");
}