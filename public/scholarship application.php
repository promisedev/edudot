<?php
require_once "../src/header.php";
require_once "../src/conn.php";
$id = $_GET["id"];

if(isset($_GET["id"])){

$statement = $pdo->prepare("SELECT * FROM scholarship WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();

$single_scholarship = $statement->fetch(PDO::FETCH_ASSOC);

//var_dump($single_scholarship);
}
?> 
<section class="s_application_cont">

<div class="title">
    <h3><?php echo strtoupper($single_scholarship["title"])?></h3>
    <div class="underline"></div>
</div>
<!-- /////////////////// -->
<section class="application_body">

<article class="s_application_img" 
style="background:url('<?php echo $single_scholarship["avatar"]?>');
background-repeat: no-repeat; background-size: 100% 100%"
></article>

<!-- ///////////// -->
<article class="s_application_desc">
    <div class="item1">
        <p>ELIGIBILITY</p>
        <p><span><?php echo $single_scholarship["eligibility"]?> </span></p>
    <p><span> <b>Worth: </b>$<?php echo number_format($single_scholarship["prize"], 2, '.', ',')?> </span></p>
    </div>
    <!-- /// -->
    <div class="item2">
    <p>HOW TO APPLY</p>
        <p>
            <span>
               <?php echo $single_scholarship["steps"]?> 
            </span>
        </p>
    </div>
    <!-- //// --> 
</articlce>


</section>
<!-- ////////////////// -->
<div class="apply_div">
<form method="post" action="application gateway.php">
<input type="hidden" name="link" value="<?php echo $single_scholarship["link"]?>"/>
<input type="hidden" name="id" value="<?php echo $single_scholarship["id"]?>"/>
<button type="submit"> Apply</button>
</form>
</div>
</section>
<!-- footer -->
<?php
require_once "../src/footer.php"?>