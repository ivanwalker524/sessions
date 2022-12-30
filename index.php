<?php
session_start();
if(isset($_GET['logout'])) unset($_SESSION['user']);
$page = 'login';
if(isset($_SESSION['user'])){
    //this code will only execute when the user is logged in
    $page='dashboard';
    //if(isset($_GET['ref'])){
        //$page = $_GET['ref'];
        //if(!file_exists("files/$page.php")) $page = 'dashboard';
    //}
}
require "files/header.php";
require "files/$page.php";
require "files/footer.php";
