<?php
require_once "../src/header.php";
require_once "../src/conn.php";

$id = $_POST["id"] ?? $_GET["id"] ;

$errors = "";

if(isset($_GET["error"])){
    $errors = $_GET["error"];
}

?>
   <!-- /// -->
   <div class="error_div">
    
    <?php if(!empty($errors)):?>
        
        <article class="error_alert"> 
        <?php echo $errors ?>
           </article>
    
    <?php endif; ?>
</div>

<!--  -->
<section class="s_application_cont">
   
<article class="generate_cont " >
   
    <!--  this house the main form content ///////////////////////-->
    <div class="g_item generate_form3"> 
    
        <!-- // -->
<p><span>UCC GENERATION</span></p>
<!--  -->

<div class="g_form_control">
    <article class="controled_ele">
<div class="ele1">
    <span>NGN</span>
    <span class="arrow">&#9660;</span>
    <!-- drop down -->
<div class="currency">
<span id="usd">USD</span>
<span id="eur">EUR</span>
<span id="ngn">NGN</span>
</div>
<!-- /// -->
</div>
<div class="ele2"><span>&#8358;1000</span></div>


    </article>

    
</div>


<!-- ............................. -->
<div class="g_form_control">
    <form method="post" action="naira_processing.php" class="g_form2">
      <input type="email" name="email" value="" placeholder="Email"  />
       <input type="hidden" name="amount" value="1000"  />
      <input type="hidden" name="id" value="<?php echo $id?>"  />
    <button type="submit" class="g_pay">Proceed with payment</button>
    </form>
</div>
<!-- ///////////////////////////////////////////////////////// -->
    </div>
    <!-- end -->


    <!--  this house the main form content ///////////////////////-->
    <div class="g_item generate_form2"> 
    
        <!-- // -->
<p><span>UCC GENERATION</span></p>
<!--  -->

<div class="g_form_control">
    <article class="controled_ele">
<div class="ele1">
    <span>EUR</span>
    <span class="arrow">&#9660;</span>
      <!-- drop down -->
<div class="currency">
<span id="usd">USD</span>
<span id="eur">EUR</span>
<span id="ngn">NGN</span>
</div>
<!-- /// -->
</div>
<div class="ele2"><span>£2.00</span></div>
    </article>
</div>
<!-- ............................. -->
<div class="g_form_control">
    <form method="post" action="euro_processing.php" class="g_form2">
      <input type="email" name="email" value="" placeholder="Email"/>
       <input type="hidden" name="amount" value="2"  />
       <input type="hidden" name="id" value="<?php echo $id?>"  />

    <button type="submit" class="g_pay">Proceed with payment</button>
    </form>
</div>
<!-- ///////////////////////////////////////////////////////// -->
    </div>
    <!-- end -->

    <!--  this house the main form content ///////////////////////-->
    <div class="g_item generate_form1"> 
  
        <!-- // -->
<p><span>UCC GENERATION</span></p>
<!--  -->

<div class="g_form_control">
    <article class="controled_ele">
<div class="ele1">
    <span>USD</span>
    <span class="arrow">&#9660;</span>
      <!-- drop down -->
<div class="currency">
<span id="usd">USD</span>
<span id="eur">EUR</span>
<span id="ngn">NGN</span>
</div>
<!-- /// -->
</div>



<div class="ele2"><span>$2.00</span></div>

    </article>
 <!--  -->
</div>
<!-- ............................. -->
<div class="g_form_control">
    <form method="post" action="dollar_processing.php" class="g_form2">
      <input type="email" name="email" value="" placeholder="Email"  />
       <input type="hidden" name="amount" value="2"  />
       <input type="hidden" name="id" value="<?php echo $id?>"  />

    <button type="submit" class="g_pay">Proceed with payment</button>
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
let usd_form = document.querySelector(".generate_form1");
let eur_form = document.querySelector(".generate_form2");
let ngn_form = document.querySelector(".generate_form3");

let currency_btn = document.querySelectorAll(".ele1");
let dropdowns = document.querySelectorAll(".currency");
let usd_btn = document.querySelectorAll("#usd");
let eur_btn = document.querySelectorAll("#eur");
let ngn_btn = document.querySelectorAll("#ngn");

currency_btn.forEach(function(btn){

    btn.addEventListener("click", function(e){
    let my_btn = e.currenTarget;

    dropdowns.forEach(function(dropdown){

       dropdown.classList.toggle("show_currency");
    // if(dropdown.classList === add("hide_currency")){
    //     dropdown.classList.add("show_currency");
    // }
        setTimeout(() => {
            dropdown.classList.remove("show_currency");
        }, 9000); 
    });
    
    });
});

usd_btn.forEach(function(btn){
btn.addEventListener("click",function(){
    usd_form.classList.add("show_form");
    eur_form.classList.remove("show_form");
    ngn_form.classList.remove("show_form");
});

});

// ///////////////////////////////
eur_btn.forEach(function(btn){
btn.addEventListener("click",function(){
    usd_form.classList.remove("show_form");
    eur_form.classList.add("show_form");
    ngn_form.classList.remove("show_form");
});
});

// ///////////////////////////////
ngn_btn.forEach(function(btn){
btn.addEventListener("click",function(){
    usd_form.classList.remove("show_form");
    eur_form.classList.remove("show_form");
    ngn_form.classList.add("show_form");
});
});


window.addEventListener("click",function(){
let alert_ele =  document.querySelector(".error_alert");
console.log(alert_ele);
setTimeout( hidealert(), 9000);

function hidealert(){
    alert_ele.classList.add("hide_error");
}

});


</script>


<?php
require_once "../src/footer.php"?>