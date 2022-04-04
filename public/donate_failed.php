<?php
require_once "../src/header.php";
require_once "../src/conn.php";

// $id = $_POST["id"]?? $_GET["id"]; 
// $ucc = $_GET["ucc"];
// $email=$_GET["email"];


?>
  
<section class="s_application_cont">
   
<article class="generate_cont2" >
   
    <!--  this house the main form content ///////////////////////-->
    <div class="g_item"> 
    <p><span></span></p>
        
    <article class="g_desc">
    <div class="con_msg" style="background:rgb(247, 172, 126);">
        <span><img src="../src/icons/failed.png"/></span> &nbsp;&nbsp; &nbsp;       
           <span style="color:rgb(171,41,39)">   Payment was not successful!</span>
     </div>
</article>
<!-- / -->

 <div class="g_btn_div">
    <form method="post" action="donate.php">
    <input type="hidden"  name ="id" value=""/>
    <button type="submit" class="g_pay"> try again </button>
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