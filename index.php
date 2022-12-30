<?php
session_start();
$page = 'login';
if(isset($_SESSION['user'])){
    //this code will only execute when the user is logged in
    $page='dashboard';
    //if(isset($_GET['ref'])){
        //$page = $_GET['ref'];
        //if(!file_exists("files/$page.php")) $page = 'dashboard';
    //}
}
require "files/$page.php";
