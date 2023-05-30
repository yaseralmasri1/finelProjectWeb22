<?php
include 'db_helper.php';
header("Content-Type:application/json");
$db_helper = new DbHelper();
$db_helper->createDbConnection();
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST["name"];
$email = $_POST["email"];
$id= $_POST["id"];
$phoneNumber=$_POST["phoneNumber"];
$myFile = $_FILES["image"];

$db_helper->insertNewEmployee($name,$email,$id,$phoneNumber,$myFile);
}
?>