<?php
session_start();
$mysqli=new mysqli("localhost","root","","car");
$feedback="";
$feed="";
if (empty($_SESSION['login']['names'])){
    header("location:../login.php");
  }
?>