<?php
$conn = mysqli_connect("localhost","root","","shopingwebsite") or die("connection failed");
$id = $_POST['del'];
$sql = "DELETE FROM orderconfirmed WHERE id = $id";
$rel = mysqli_query($conn,$sql) or die("query failed");

header("Location: http://localhost/ajayphp/shopingwebsite/indexajax.php");
?>