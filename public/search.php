<?php
require_once "../src/header.php";
require_once "../src/conn.php";
$error = [];
$search = "";
$scholarships = "";
if(isset($_GET["search"])){
$search = $_GET["search"];
if(empty($search)){
    $error[] = "please enter a search key";
}
else if($search){
$statement = $pdo->prepare("SELECT * FROM scholarship WHERE country LIKE :search  || title LIKE :search");
$statement->bindValue(":search", "%$search%");
$statement->execute();

$scholarships = $statement->fetchAll(PDO::FETCH_ASSOC);

if(empty($scholarships)){
    $error[] = "no search result found!";
}
}






}
?>
   <!-- /// -->
  <!-- /// -->
   <div class="error_div">
    
    <?php if(!empty($error)):?>
        
        <article class="error_alert"> 
        <?php foreach($error as $err) :?>   
        <?php echo $err ?>
        <?php endforeach; ?>
           </article>
    
    <?php endif; ?>
</div>

<!--  --> 
   <section class="s_display_div">

   
     <!-- single scholarship -->
     <?php if(empty($error)) : ?>
     <?php foreach($scholarships as $scholarship) :?>   
     <article>
       <div class="s_img2" 
       style="background:url('<?php echo $scholarship["avatar"]?>');
       background-size: 100% 100%; background-repeat:no-repeat">
        <div class="s_category2"><?php echo $scholarship["category"]?></div>
       <div class="s_country2"><?php echo $scholarship["country"]?></div>
       </div> 
       <div class="s_title2">
       <form method="get" action="scholarship application.php" class="s_application_form">
               <input type="hidden" name="id" value="<?php echo $scholarship["id"]?>"/>
        <button type="submit">   
            <span ><?php echo strtoupper($scholarship["title"])?></span>
     </button>
     </form>
    </div>
    </article>
    <?php endforeach; ?>
    <?php endif; ?>
    <!-- end of single scholarship -->


</section>

<script>

window.addEventListener("click",function(){
let alert_ele =  document.querySelector(".error_alert");
// console.log(alert_ele);
setTimeout( hidealert(), 9000);

function hidealert(){
    alert_ele.classList.add("hide_error");
}

});


</script>
<!--  -->
<?php
require_once "../src/footer.php"?>