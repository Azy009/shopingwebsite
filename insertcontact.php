<?php

$conn = mysqli_connect("localhost","root","","shopingwebsite") or die("connection failed");
    $name = $_POST['username'];
    $number = $_POST['phone'];
    $gmail = $_POST['gmail'];
    $area = $_POST['area'];

$sql = "INSERT INTO CONTACT(CNAME,CPHONE,GMAIL,CDESCRIPTION) VALUES('{$name}','{$number}','{$gmail}','{$area}')";

 if(mysqli_query($conn,$sql)){
     echo 1;
 }else{
     echo "something wrong try again";
 }

mysqli_close($conn);

// echo $selectdata;
?>