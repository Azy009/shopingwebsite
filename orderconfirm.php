<?php
$conn = mysqli_connect("localhost","root","","shopingwebsite") or die("connection failed");
$id = $_POST['productid'];
$pname = $_POST['productname'];
$uname = $_POST['Username'];
$upassword = $_POST['userpassword'];
$pquentity = $_POST['productquentity'];
$payment = $_POST['payment'];
$des = $_POST['productdes'];
$pri = $_POST['price'];
$img = $_POST['img'];



$sql = "INSERT INTO orderconfirmed(productname,conusername,conpassword,qentity,paymett,productid,productdes,price,imge) VALUES('{$pname}','{$uname}','{$upassword}',$pquentity,'{$payment}',$id,'{$des}',$pri,'{$img}')";


if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}

?>