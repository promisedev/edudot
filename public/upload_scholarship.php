<?php
require_once "../src/header.php";
require_once "upload.php";

?>
<!-- body -->

<!-- //////////////////// -->
<section class="c_btn_div">
    <a href="content_management_system.php"><button class="c_btn">
       Back to CMS
    </button></a>
</section>
<!-- //////////////////////////// -->
<section class="form_cont">
<form method="post" action="" enctype="multipart/form-data">
<!-- /////////// -->
 <?php if(!empty($errors)):?>
<article class="error">
    <?php foreach ($errors as  $error) :?>
     <div> <?php echo $error?></div> 
    <?php endforeach; ?>
</article>
<?php endif; ?>
<!--  -->
<div class="form_control">
<label for="avatar">Avatar</label>
<input type="file" name="avatar" id="avatar"/>
</div>
<!-- ////////////////// -->
<!-- /////////// -->
<div class="form_control">
<label for="country">Country</label>
<input type="radio" name="country" id="country" value="Canada"/><span>Canada</span></br>
<input type="radio" name="country" id="country" value="UK"/><span>UK</span></br>
<input type="radio" name="country" id="country" value="USA"/><span>USA</span></br>
<input type="radio" name="country" id="country" value="Germany"/><span>Germany</span></br>
<input type="radio" name="country" id="country" value="Nigeria"/><span>Nigeria</span>
</div>
<!-- ////////////////// -->
<div class="form_control">
<label for="title">Scholarship title</label>
<input type="text" name="title" id="title" placeholder="Enter title" value="<?php echo $title?>"/>
</div>
<!-- ////////////////// -->
<div class="form_control">
<label for="category">Category</label>
<input type="text" name="category" id="category" value="<?php echo $category?>" placeholder="Enter category"/>
</div>
<!-- ////////////////// -->
<div class="form_control">
<label for="prize">Prize</label>
<input type="text" name="prize" id="prize"  placeholder="Enter prize" value="<?php echo $prize?>"/>
</div>
<!-- ////////////////// -->
<div class="form_control">
<label for="link">Redirect link</label>
<input type="text" name="link" id="link"  placeholder="Enter link" value="<?php echo $link?>"/>
</div>
<!-- ////////////////// -->
<div class="form_control">
<label for="eligible">Eligibility</label>
<textarea type="text" name="eligible" id="eligible" 
placeholder="Enter scholarship eligibility">
<?php echo $eligibility ?>
</textarea>
</div>
<!-- ////////////////// -->
<div class="form_control">
<label for="steps">Steps</label>
<textarea type="text" name="steps" id="steps" 
placeholder="Enter scholarship steps">
<?php echo $steps?>
</textarea>
</div>
<!-- ////////////////// -->
<div class="form_control">
<label for="deadline">Deadline</label>
<input type="date" name="deadline" id="deadline" value="<?php echo $deadline?>" placeholder="Enter deadline"/>
</div>

<button type="submit"> Upload</button>
</form>

</section>
<!-- ////////////// -->
<?php
require_once "../src/footer.php"?>