<?php
$servername="localhost";
$username="id8741732_root";
$password="asdfghjk";
$dbname="id8741732_stationary";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
?>