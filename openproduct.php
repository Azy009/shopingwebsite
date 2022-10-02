<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: http://localhost/ajayphp/shopingwebsite/login.php");
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/front.css">
    <link rel="stylesheet" href="css/openproduct.css">
    <title>Document</title>
</head>
<body>
    <!-- header section 1 start here -->

    <div class="header">
        <div class="mainheader">
            <h1 style="width:359px;"> <img src="img/shopping-cart (1).png" alt=""> SHOP WORLD</h1>
        </div>


    <!-- header section 2 start ends -->

    <!-- menu section 2 start here -->

        <div class="menu">
            <ul class="submenu">
                <li><a href="index.php">Home </a></li>
                <li id="menu"><a href="menuajax.php">Menu <span class="spani"><i class="fa-solid fa-angle-down"></i></span></a>
                <ul class="subul" style="
    font-family:'Times New Roman', Times, serif;">
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
    
    <!-- menu section 2 start ends -->
    <div class="ordercontainer">
    <?php

      $connn = mysqli_connect("localhost","root","","shopingwebsite") or die("connection failed");

if(isset($_GET['id'])){
      $id = $_GET['id'];
    }


      $sqli = "SELECT * FROM MENU WHERE ID = {$id}";


      $rell = mysqli_query($connn,$sqli) or die("query failed");
      
      if(mysqli_num_rows($rell) > 0){
          while($row = mysqli_fetch_assoc($rell)){

    ?>

        <div class="section_left">
            <h1 style="margin-left:120px; text-decoration:underline;">PRODUCT</h1>
            <div class="item leadd"> <img src="IMG/<?php echo $row['PRODUCTIMG'] ; ?>" alt="">
                <div class="productname"><h2 style="margin-top: 4px;"><?php echo $row['PRODUCTNAME']; ?></h2></div>
                <div class="price" style="margin-top: 4px;" > <small><span style="text-decoration:line-through;"></span>$485</small> <?php echo $row['PRICE']; ?></div>
                <div class="title" ><p  style="margin-top: 4px;"><?php echo $row['PRODUCTDES'] ; ?> </p></div>
                <!-- <div class="company"><a href="" style="margin-top: 4px;">See more</a></div></div> -->
             </div>
          </div>
            
       
        <div class="section_right" style="height: 325px;">
            <form id="saveform"> 
                <div class="heading1">
                    <h1 style="text-decoration: underline;">PURCHASE</h1>
                </div>
                 <div class="Username">
                 <input type="hidden" name="productid" id="idd" value="<?php echo $row['ID'];  ?>">
                 <input type="hidden" name="productdes" id="dkdk" value="<?php echo $row['PRODUCTDES'];  ?>">
                 <input type="hidden" name="price" id="price" value="<?php echo $row['PRICE'];  ?>">
                 <input type="hidden" name="img" id="price" value="<?php echo $row['PRODUCTIMG'];  ?>">
                 <input type="hidden"  name="productname" id="name" value="<?php echo $row['PRODUCTNAME'];  ?>">
                  USERNAME : <input type="text" name="Username" id="username" placeholder="username">
                </div>
                <div class="userpassword">
                PASSWORD : <input type="text" name="userpassword" id="userpassword" placeholder="userpassword">
                </div>
                <div class="productquentity">
                  QENTITY : <input type="number" name="productquentity" id="productquentity" placeholder="productquentity">
                </div>
                <div class="payment">
                   PAYMENT : <select name="payment" id="payment">
                        <option value="upi">upi</option>
                        <option value="debet">debet</option>
                        <option value="paytem">paytem</option>
                        <option value="another">another</option>

                    </select>
                </div>
                <div class="btnn">
                <input class="buynow" type="submit" id="submit" name="sumbit" value="BUY NOW">
                </div>
            </form>
        </div>

        <?php
   }
}
        ?>
    </div>

    <!-- festival offers section 6 start here -->

    <h1 class="heading" data-aos="fade-right">FESTIVAL OFFERS</h1>
    <div class="offershere">
      
 <div data-aos="fade-right">
     <img src="img/offeri.jpg" alt="">
 </div>
 <div data-aos="zoom-in">
    <img src="img/offerim.jpg" alt="">
</div>
<div data-aos="fade-left">
    <img src="img/offerimg.jpg" alt="">
</div>
    </div>

    <!-- festival offers section 6 ends here -->


    <!-- brands section 7 start here -->

  <h1 id="branddd" data-aos="fade-left">BRANDS</h1>
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
          <h2>@SHOP WORLD</h2>
      </div>

    </div>

    <!-- footer section 8 ends here -->


    <div class="contactbox">
        
        <div class="closeicon">x</div>
        <div class="formm">
            <form action="" method="post">
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



        $("#submit").on("click",function(){
            
$.ajax({
   url: "orderconfirm.php",
   type: "POST",
   data : $("#saveform").serialize(),
   success : function(data){
    window.location = "menuajax.php";
       if(data == 1){
           window.location ="indexajax.php";
           alert("thanks for login");
          
       }else{
           alert("something wrong");
       }
   }
});







        });






    });
</script>
   
</body>
</html>