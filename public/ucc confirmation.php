<?php
require_once "../src/header.php";
require_once "../src/conn.php";

$id = $_POST["id"]?? $_GET["id"]; 
$ucc = $_GET["ucc"];
$email=$_GET["email"];
if(isset($_POST["id"])){
    header("Location: scholarship application.php?id=$id");
}

?>
  
<section class="s_application_cont">
   
<article class="generate_cont2" >
   
    <!--  this house the main form content ///////////////////////-->
    <div class="g_item"> 
    <p><span>CONFIRMATION</span></p>
        
    <article class="g_desc">
    <div class="con_msg">
        <span><img src="../src/icons/confirm.png"/></span>        
        <span>Congratulation Payment Successful</span>
     </div>
</article>
<!-- / -->
<article class="con_desc1">
    <span><b>UCC</b>:</span>
    <span class="con_detail"><?php echo $ucc?></span>
 </article>
<!-- / -->
<article class="con_desc1">
    <span class="con_desc2">An email containing your UCC has been sent to:</span>
    <span class="con_detail"><?php echo $email?></span>
 </article>

 <div class="g_btn_div">
    <form method="post" action="">
    <input type="hidden"  name ="id" value="<?php echo $id?> "/>
    <button type="submit" class="g_pay">Continue to Apply </button>
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