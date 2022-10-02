<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/front.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
</head>
<body>
   
    <div class="header">
        <div class="mainheader">
            <h1 style="width:359px;"> <img src="img/shopping-cart (1).png" alt=""> SHOP WORLD</h1>
        </div>


    <!-- header section 2 start ends -->

    <!-- menu section 2 start here -->

        <div class="menu">
            <ul class="submenu"
            style="
    font-family:'Times New Roman', Times, serif";
            >
                <li><a href="indexajax.php">Home </a></li>
                <li id="menu"><a href="menuajax.php">Menu <span class="spani"><i class="fa-solid fa-angle-down"></i></span></a>
                <ul class="subul">
                    <li><a href="menuajax.php">Saare</a></li>
                    <li><a href="menuajax.php">Watch</a></li>
                    <li><a href="menuajax.php">Shoes</a></li>
                    <li><a href="menuajax.php">Bags</a></li>
                    <li><a href="menuajax.php">Iron</a></li>
                    <li><a href="menuajax.php">Jeans</a></li>
                    <li><a href="menuajax.php">Jaket</a></li>
                    <li><a href="menuajax.php">Bofer</a></li>
                    <li><a href="menuajax.php">Mobile</a></li>
                    <li><a href="menuajax.php">Camera</a></li>
                    <li><a href="menuajax.php">Laptop</a></li>
                    <li><a href="menuajax.php">Airpods</a></li>
                    <li><a href="menuajax.php">T-shirt</a></li>
                </ul>
                </li>
                <li id="latest"><a href="login.php">Login </a>
                    <!-- <ul class="subul">
                        <li><a href="">Bags</a></li>
                        <li><a href="">Jeans</a></li>
                        <li><a href="">Watch</a></li>
                        <li><a href="">Airpods</a></li>
                        <li><a href="">Computer</a></li>
                    </ul> -->
                </li>
                <li id="offers"><a href="#aboutuss">About
                    <!-- <ul class="subul">
                        <li><a href="">Iron</a></li>
                        <li><a href="">Shoes</a></li>
                        <li><a href="">Computer</a></li>
                        <li><a href="">Laptop</a></li>
                        <li><a href="">T-shirt</a></li>
                    </ul> -->
                </a></li>
                <li id="brands"><a href="#branddd">Brands <span><i class="fa-solid fa-angle-down"></i></span></a>
                    <ul class="subul">
                     <li><a href="">Nike</a></li>
                    <li><a href="">Zouk</a></li>
                    <li><a href="">Lenovo</a></li>
                    <li><a href="">Citizen</a></li>
                    <li><a href="">Wildcraft</a></li>
                    <li><a href="">Vivo</a></li>
                    <li><a href="">Canon</a></li>
                    <li><a href="">Buffer</a></li>
                    <li><a href="">Denim</a></li>
                    <li><a href="">Max blue</a></li>


                    


                    </ul>
                </li>
                <li id="brands"><a href="profile.php">Profile</a>
                </li>

            </ul>
        </div>
    </div>
    

<!-- header section ends here -->

<h1 id="hello"></h1>
<div class="login" style="height: 300px;width: 670px;margin-left:270px;">
    <div class="one" style="width:300px;">
        <img src="img/aa.webp" alt="304" style="height: 300px;width:300px;">
    </div>
   <div class="two">
    <h1 id="one">LOGIN </h1>
    <form id="fusername" action="<?php $_SERVER['PHP_SELF'];  ?>" method="post" >
   
        <div class="username">
            <input type="text" name="vusername" id="vusername" placeholder="enter your username">
        </div>

        <div class="password">
            <input type="text" name="vpassword" id="vpassword" placeholder="enter your password">
        </div>
      
<input type="submit" value="LOGIN"  name ="submit" id="submit">
       <button style=" width: 260px;
    height: 31px;
    font-size: 23px;
    font-weight: bolder;
    border-radius: 16px;
    border: 1px solid black;
    margin-left: 30px;
    margin-top: 15px;"> <a href="createaccount.php" style="color:black;">CREATE ACCOUNT</a></button>
        
    </form>
   </div>
</div>


<h1 id="branddd" data-aos="fade-left" style="margin-top:22px;">BRANDS</h1>
<div class="companys">
    <div><img src="img/c9.jpg" alt=""></div>
    <div><img src="img/c6.jpg" alt=""></div>
    <div><img src="img/c8.jpg" alt=""></div>
    <div><img src="img/c7.jpg" alt=""></div>
    <div><img src="img/c4.jpg" alt=""></div>
    <div><img src="img/c13.jpg" alt=""></div>
</div>


<!-- brands section 7 ends here -->


<!-- footer section 8 start here -->


<div class="mainfooter" data-aos="zoom-in">
  <div class="footer">
    <div class="brandss">
        <H1>COMPANYS</H1>
       <h3> Nike</h3>
       <!-- <h3> Zouk</h3> -->
         <h3> Lenovo</h3>
          <!-- <h3>Citizen</h3> -->
        <h3> Wildcraft</h3>
        <h3> Vivo</h3>
         <h3> Canon</h3>
        <h3> Buffer</h3>
        <h3> Denim</h3>
      </div>
 <div class="aboutuss" id="aboutuss">
  <h1>ABOUT US</h1>
  <h3> Lorem ipsum </h3>
  <h3>dolor sit amet</h3>
<h3> consectetur </h3>
<h3>adipisicing elit.</h3> 
<h3>Optio ex itaque</h3> 
<h3>quibusdam, quis </h3> 
<h3>autem reprehenderit,</h3>
   </div>
  <div class="product">
   <h1>PRODUCTS</h1>
     <h3> Watch</h3>
    <h3>Bags</h3>
<h3>Jeans</h3>
<h3> Jaket</h3>
    <h3>Mobile</h3>
<h3>Laptop</h3>
    <h3>Airpods</h3>

  </div>
  <div class="contactus">
  <h1>CONTACT US</h1>
  <h3 >Contact with <i class="fa-solid fa-phone"></i></h3>
  <h3>8178609471</h3>
  <h3 id="clickmee">Contact with <i class="fa-solid fa-message"></i></h3>
  <h3>Help</h3>
  <h3>privacy police</h3>
   </div>
  </div>
  <div class="mainfooterr">
      <div class="icon">
      <div><i class="fa-brands fa-facebook-square"></i></div>
      <div><i class="fa-brands fa-instagram-square"></i></div>
      <div><i class="fa-brands fa-twitter-square"></i></div>
      </div>
      <h2 id="h2">@SHOP WORLD</h2>
  </div>

</div>
<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost","root","","shopingwebsite") or die("connection failed");

$username = $_POST['vusername'];
$password = $_POST['vpassword'];

$sql = "SELECT * FROM username WHERE uusername = '{$username}' AND upassword = '{$password}'";

$rel = mysqli_query($conn,$sql) or die("query failed");


if(mysqli_num_rows($rel) > 0){

while($row = mysqli_fetch_assoc($rel)){


    
    // $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['uusername'];
    $_SESSION['password'] = $row['upassword'];

    echo "<script>  window.location = 'menuajax.php';</script>";

  }
  }else{
    echo "<script> alert('something wrong');  </script>";
  }
   }
    
   ?>

<!-- footer section 8 ends here -->


<div class="contactbox">
    
    <div class="closeicon">x</div>
    <div class="formm">
        <form action="username.php" method="post">
            <div class="name">
                <input type="text" name="name" id="name" placeholder="Enter your name" >
            </div>
            <div class="number">
                <input type="number" name="number" id="number" placeholder="Enter your number" >
            </div>
            <div class="gmail">
                <input type="gmail" name="gmail" id="gmail" placeholder="Enter your gmail" >
            </div>
            <div class="textarea">
             <textarea name="arar" id="" cols="52" rows="4" placeholder="Enter your problum"></textarea>
            </div>
            <div class="submittt">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
<div class="opp"></div>
<script src="js/jquery.min.js"></script>
<script>
    $(document).ready(function(){



        
$(".contactbox").hide()
$("#clickmee").on('click',function(){
    $(".contactbox").show()
})
 $(".closeicon").on("click",function(){
    $(".contactbox").hide()
 });






    });
</script>

</body>
</html>