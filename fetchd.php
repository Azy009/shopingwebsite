<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: http://localhost/ajayphp/shopingwebsite/indexajax.php");
}else{
$sess = $_SESSION['username'];
}
$conn = mysqli_connect("localhost","root","","shopingwebsite") or die("connection failed");




$sql = "SELECT * FROM username WHERE uusername = '{$sess}'";

$rel = mysqli_query($conn,$sql) or die("query failed");
$selectdata = "";
if(mysqli_num_rows($rel) > 0){
    while($row = mysqli_fetch_assoc($rel)){
   
        $selectdata .= "
        <div class='about_you'>
                <h2>YOUR DETAILS</h2>
            </div>
            <hr>
            <div class='username'>
                Username : {$row['uusername']}
             </div>
            <div class='age'>
               Age :{$row['age']}
            </div>
            <div class='number'>
                Number : {$row['unumber']}
             </div>
            <div class='gmail'>
               Gmail : {$row['gmail']}
            </div>
            <hr>

        ";

    }
}
mysqli_close($conn);
echo $selectdata;

?>