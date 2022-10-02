<?php include "header.php"; ?>
    <!-- slider-img section 3 start here -->

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
      <div class="ordercon">

    


      </div>

    <!-- brands section 7 start here -->
    <?php  include "footer.php";  ?>

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