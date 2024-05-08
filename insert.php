<?php
header('Access-Control-Allow-Origin: *');

$ser="localhost";
$u="root";
$p="";
$db="ab";

$conn=new mysqli($ser,$u,$p,$db);
if(isset($_GET['id']) &&
    isset($_GET['firstname'])&&
    isset($_GET['lastname'])&&
    isset($_GET['email']))
    {
        $id=$_GET['id'];$firstname=$_GET['firstname'];
        $lastname=$_GET['lastname'];$email=$_GET['email'];

        $sql="insert into myguests  values ('$id','$firstname','$lastname','$email')";
        $kq=$conn->query($sql);
        echo $kq;
    }
?>