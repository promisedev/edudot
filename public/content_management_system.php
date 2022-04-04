<?php
require_once "../src/header.php";
require_once "../src/conn.php";

$statement = $pdo->prepare("SELECT * FROM scholarship ORDER BY create_date DESC");
$statement->execute();

$lists = $statement->fetchall(PDO::FETCH_ASSOC);

?>


<!-- body -->

<!-- //////////////////// -->
<section class="c_btn_div">
    <a href="upload_scholarship.php"><button class="c_btn">
       Upload Scholarship
    </button></a>
</section>
<!-- //////////////////////////// -->
<section class="table_cont">
<table class="c_table">
    <thead>
        <tr>
<th> ID</th>
<th> COUNTRY</th>
<th> TITLE</th>
<th> CATEGORY</th>
<th> PRIZE</th>
<th> AVATAR</th>
<th> DEADLINE</th>
 <th> CREATE_DATE</th>  
   <th> ACTION</th>         
        </tr>
    </thead>
    <!-- ////// -->
    <tbody>
<?php foreach($lists as $list):?>
        <tr>
<td> <?php echo $list["id"] ?></td>
<td><?php echo $list["country"] ?> </td>
<td> <?php echo $list["title"] ?></td>
<td> <?php echo $list["category"] ?></td>
<td> $<?php echo $list["prize"] ?></td>
<td> <img src="<?php echo $list["avatar"] ?>"/></td>
<td> <?php echo $list["deadline"] ?></td>
 <td> <?php echo $list["create_date"] ?></td>
  <td> 
      <form method="post" action="delete.php">
    <input type="hidden" value="<?php echo $list["id"] ?>" name="id"/>
      <button type="submit">Remove</button>
</form>
    </td>          
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

</section>
<?php
require_once "../src/footer.php"?>