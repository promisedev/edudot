<?php
require_once "../src/header.php";
require_once "../src/conn.php";
$id = $_POST["id"] ?? null;

$link = $_POST["link"] ?? null;
$errors = [];
$ucc = "";
$url ="" ;
 if(isset($_POST["ucc"])){ 
 $ucc = $_POST["ucc"];
 $url = $_POST["link"] ;  

 $statement = $pdo->prepare("SELECT * FROM ucc WHERE ucc LIKE :ucc");
 $statement->bindValue(':ucc', $ucc);
 $statement->execute();
 $users_ucc = $statement->fetch();
 if($users_ucc){
  $user_ucc = $users_ucc["ucc"];
   header("Location: $url ");
 } else{
     $errors[] = "User confirmation code does not exist!";
 }

} 
// echo $link."</br>";
// echo $ucc."</br>";
// echo $url."</br>";

?>

<section class="s_application_cont">

<article class="g_cont">

    <div class="g_item"> 
    
        <!-- // -->
<p><span>Already have user confirmation code?</span></p>
<!--  -->
<div class="g_form_control">
    <form method="post" action="" class="g_form">
      <input type="text" name="ucc" value="<?php echo $ucc?>"  placeholder="Enter code here!"/>
       <input type="hidden" name="link" value="<?php echo $link?>"  />
       <input type="hidden"  name ="id" value="<?php echo $id?> "/>
    <button type="submit">Proceed</button>
    </form>
</div>
<!-- /// -->
<div class="error_div">
    <?php if(!empty($errors)):?>
        
        <article class="error_alert"> 
<?php foreach($errors as $error): ?>
        <?php echo $error ?>
 <?php endforeach; ?>   
        </article>
    
    <?php endif; ?>
</div>

<!--  -->
<article class="g_desc">
    <div><span>Please If this is your first time applying for scholarship through our
website kindly generate your <a href="">user confirmation code</a> by paying a site maintenance fee of $2 or it’s equivalent. This payment will be valid for one year. </br>
<b>NB</b>: Scholarship application is free.</span> </div>
</article>

<div class="g_btn_div">
    <form method="post" action="generate.php">
    <input type="hidden"  name ="id" value="<?php echo $id?> "/>
    <button type="submit" class="g_pay">Continue</button>
</form>
</div>
<!-- // -->
    </div>
</article>
</section>

<script>

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