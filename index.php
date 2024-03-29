<?php
require_once 'assets/php/functions.php';

if(isset($_GET['signup'])){
showPage('header',['page_title'=>'Pictogram - Signup']);
showPage('footer');
showPage('signup');
}
?>