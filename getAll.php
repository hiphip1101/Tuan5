<?php
header('Access-Control-Allow-Origin: *');

$ser="localhost";
$u="root";
$p="";
$db="ab";

$conn=new mysqli($ser,$u,$p,$db);
$sql="select * from mytable";
$kq=$conn->query($sql);
while($row[]=$kq->fetch_assoc()){
    $json=json_encode($row);
}
echo '{"test:"' .$json.'}';
$conn->close();

?>