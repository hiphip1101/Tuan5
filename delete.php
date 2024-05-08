<?php
header('Access-Control-Allow-Origin: *');
$ser="localhost";
$u="root";
$p="";
$db="ab";

$conn=new mysqli($ser,$u,$p,$db);
$sql="delete from test  where Ma=1";
if($conn->query($sql)===TRUE){
    echo "Da delete thanh cong";
}
else
{
    echo "Co loi " .$conn->error;
}
$conn->close();

?>