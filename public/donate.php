<?php
require_once "../src/header.php";
require_once "../src/conn.php";

 

if(isset($_GET["error1"]) || isset($_GET["error4"])){
$error1 = $_GET["error1"] ?? "" ;
  $error2 = $_GET["error2"]?? ""  ;
  $error3 = $_GET["error3"]?? ""  ;
  $error4 = $_GET["error4"]?? "" ; 
  
 $errors = [$error1,$error2,$error3] ;
$errors2 = [$error4];
//  echo json_encode($errors);
}

if(isset($_GET["error4"])){
  $error4 = $_GET["error4"]; 
  
$errors = [$error4];
//  echo json_encode($errors);
}
?>
   <!-- /// -->
   <div class="error_div">
    
    <?php if(!empty($errors)):?>
        
        <article class="error_alert">
         <?php foreach($errors as $error) :?>    
        <?php echo $error."</br>" ?>
        <?php endforeach; ?>
           </article>
    
    <?php endif; ?>
</div>
<!-- /// -->
  
<section class="s_application_cont">
   
<article class="generate_cont2 " >
   
    <!--  this house the main form content ///////////////////////-->
    <div class="g_item generate_form3"> 
    
        <!-- // --> 
<p><span>DONATE</span></p>
<!--  -->
<!--  -->
<article class="g_desc">
    <div><span>Your donation will go a long way to help us continue to provide 
scholarship information to all our extreme users. </span> </div>
</article></br> </br>
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


<div class="ele2"><span>&#8358;</span><span id="n_txt">0</span><span>.00</span></div>

    </article>
 <!--  -->
</div>
<!-- ............................. -->
<div class="g_form_control">
    <form method="post" action="process_naira_donate.php" class="g_form2">
       <input type="number" name="amount" value="" placeholder="Amount" id="n_value"  />
         
      <input type="email" name="email" value="" placeholder="Email"  />

      <input type="text" name="name" value="" placeholder="Name"  />

    <button type="submit" class="g_pay">Proceed with payment</button>
    </form>
</div>
<!-- ///////////////////////////////////////////////////////// -->
    </div>
    <!-- end -->


    <!--  this house the main form content ///////////////////////-->
    <div class="g_item generate_form2"> 
    
        <!-- // -->
<p><span>DONATE</span></p>
<!--  -->
<!--  -->
<article class="g_desc">
    <div><span>Your donation will go a long way to help us continue to provide 
scholarship information to all our extreme users. </span> </div>
</article></br> </br>
<!--  -->
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
<div class="ele2"><span>£</span><span id="e_txt">0</span><span>.00</span></div>

    </article>
 <!--  -->
</div>
<!-- ............................. -->
<div class="g_form_control">
    <form method="post" action="process_euro_donate.php" class="g_form2">
       <input type="number" name="amount" value="" placeholder="Amount" id="e_value"  />
         
      <input type="email" name="email" value="" placeholder="Email"  />

      <input type="text" name="name" value="" placeholder="Name"  />

    <button type="submit" class="g_pay">Proceed with payment</button>
    </form>
</div>
<!-- ///////////////////////////////////////////////////////// -->
    </div>
    <!-- end -->

    <!--  this house the main form content ///////////////////////-->
    <div class="g_item generate_form1"> 
  
        <!-- // -->
<p><span>DONATE</span></p>
<!--  -->
<!--  -->
<article class="g_desc">
    <div><span>Your donation will go a long way to help us continue to provide 
scholarship information to all our extreme users. </span> </div>
</article></br> </br>
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



<div class="ele2"><span>$</span><span id="d_txt">0</span><span>.00</span></div>

    </article>
 <!--  -->
</div>
<!-- ............................. -->
<div class="g_form_control">
    <form method="post" action="process_dollar_donate.php" class="g_form2">
       <input type="number" name="amount" value="" placeholder="Amount" id="d_value"  />
         
      <input type="email" name="email" value="" placeholder="Email"  />

      <input type="text" name="name" value="" placeholder="Name"  />
      

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

// ///////////////////////

let dollar_amount =  document.getElementById("d_txt");
let d_value = document.getElementById("d_value");
let euro_amount =  document.getElementById("e_txt");
let e_value = document.getElementById("e_value");
let naira_amount =  document.getElementById("n_txt");
let n_value = document.getElementById("n_value");


d_value.addEventListener("change",function(e){
    let a_value = e.currentTarget.value;

dollar_amount.textContent = a_value;
});
// //////////////////////
e_value.addEventListener("change",function(e){
    let a_value = e.currentTarget.value;

euro_amount.textContent = a_value;
});
// //////////////////////
n_value.addEventListener("change",function(e){
    let a_value = e.currentTarget.value;

naira_amount.textContent = a_value;

});
</script>


<?php
require_once "../src/footer.php"?>