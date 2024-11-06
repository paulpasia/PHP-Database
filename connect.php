<?php
$con = mysqli_connect("localhost","root", "", "login_db");

if(!$con){
    die("connection failed: ". mysqli_connect_error());
}
?>