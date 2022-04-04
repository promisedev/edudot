<?php
require_once "../src/header.php";
require_once "../src/conn.php";

$name = ""; 
if(isset($_GET["name"])){
  $name = $_GET["name"];   
}

?>
  
<section class="s_application_cont">
   
<article class="generate_cont" >
   
    <!--  this house the main form content ///////////////////////-->
    <div class="g_item"> 
    <p><span>CONFIRMATION</span></p>
        
    <article class="g_desc">
    <div class="con_msg">
        <span class="con_img"><img src="../src/icons/confirm.png"/></span>        
        <span>Congratulation Payment Successful</span>
     </div>
</article>
<!-- / -->
<article class="con_desc1">
    <span>THANK YOU</span>
    <span class="con_detail"><b> <?php echo strtoupper($name)?></b></span>
<span>FOR YOUR DONATION WE DEEPLY
APPRECIATE</span>
 </article>
<!-- / -->


 <div class="g_btn_div">
    <form method="post" action="index.php">
   
    <button type="submit" class="g_pay">Back to Home </button>
</form>
</div>

<!-- ///////////////////////////////////////////////////////// -->
    </div>
    <!-- end -->
    
</article>
<!--  -->
</section>

<!-- generte page script goes under -->
<script>


</script>


<?php
require_once "../src/footer.php"?>