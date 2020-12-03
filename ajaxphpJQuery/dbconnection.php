<?php
$host="localhost:3307";
$user="root";
$pass="";
$dbname="jqueryphp";

$conn=new mysqli($host,$user,$pass,$dbname);
if($conn->connect_error){
    die ("Connection Failed");
}
?>