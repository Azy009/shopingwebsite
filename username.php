<?php
$conn = mysqli_connect("localhost","root","","shopingwebsite") or die("connection failed");
$sname = $_POST['vname'];
$spassword = $_POST['vpassword'];
$sage = $_POST['vage'];
$snumber = $_POST['vnumber'];
$sgmail = $_POST['vgmail'];
$susername = $_POST['vusername'];
$two = "SELECT * FROM username WHERE uusername = '{$susername}'";
$twoo = mysqli_query($conn,$two);
if(mysqli_num_rows($twoo) > 0){
    echo "please select different username";
}else{

    $sql = "INSERT INTO username(uname,uusername,unumber,age,gmail,upassword) VALUES('{$sname}','{$susername}','{$snumber}',$sage,'{$sgmail}','{$spassword}')";


    if(mysqli_query($conn,$sql)){
        echo "i hope you like it";
    }else{
        echo "please select different username";
    }
}


mysqli_close($conn);
?>