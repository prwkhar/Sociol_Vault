<?php
require_once 'functions.php';
if(isset($_GET['signup'])){
 $response=validatesignupform($_POST);
 print_r($response);
 if($response['status']){

 }
 else{
    $_SESSION['error']=$response;
 }
}