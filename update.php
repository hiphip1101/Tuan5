<?php
header('Access-Control-Allow-Origin: *');

$ser="localhost";
$u="root";
$p="";
$db="ab";

$conn=new mysqli($ser,$u,$p,$db);
$sql="update test set HoTen='ten moi',SoDT='sdt moi' where Ma=1";
if($conn->query($sql)===TRUE){
    echo "Da update thanh cong";
}
else
{
    echo "Co loi " .$conn->error;
}
$conn->close();

?>