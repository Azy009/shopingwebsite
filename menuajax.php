<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Menu.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
   <!-- header section 1 start here -->


<?php include "headermenu.php"; ?>
   <!-- header section ends here -->


<!-- search section start here -->
<div class="search">
    <form action="" method="post">
      <input type="text" name="search" id="search" placeholder="Search..">
      <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </div>
<!-- search section start here -->
<h1 class="shophere">MAINMENU</h1>
<div class="mainmenu" id="ajaxmenu" >


</div>





<?php  include "footer.php"; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js" integrity="sha512-E/yP5UiPXb6VelX+dFLuUD+1IZw/Kz7tMncFTYbtoNSCdRZPFoGN3jZ2p27VUxHEkhbPiLuZhZpVEXxk9wAHCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/jquery.min.js"></script>

  <script>
    $(document).ready(function(){
        $(".contactbox").hide()
$("#clickmee").on('click',function(){
$(".contactbox").show()
})
$(".closeicon").on("click",function(){
$(".contactbox").hide()
})




// data fetch
$.ajax({
    url : "selectdata.php",
    type : "POST",
    success : function(data){
        $("#ajaxmenu").html(data);
    }
})





// search product


$("#search").on("keyup",function(){
    let searching = $(this).val();


    $.ajax({
        url : "searchpro.php",
        type : "POST",
        data : {search:searching},
        success :function(data){
            $("#ajaxmenu").html(data);
        }
    })
})
    })
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init({
        offset: 200,
        duration: 1000,
       });
     </script>
</body>
</html>