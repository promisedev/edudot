<?php
 require_once "../src/header.php";
require_once "../src/conn.php";

$statement = $pdo->prepare("SELECT * FROM scholarship ORDER BY create_date DESC");
$statement->execute();

$items = $statement->fetchall(PDO::FETCH_ASSOC);

?>

<!-- body of our home page -->

<!-- slides -->
<div class="slide_container">
<div class="slide_item" style="background:url('../src/icons/oxford.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
1</div>
<!--  -->
<div class="slide_item"style="background:url('../src/icons/alberta.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
2</div>
<!--  -->
<div class="slide_item"style="background:url('../src/icons/yale.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
3</div>

<!--  -->
<div class="slide_item"style="background:url('../src/icons/rwth.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
4</div>
<!--  -->
<div class="slide_item"style="background:url('../src/icons/covenant.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
5</div>
<!--  -->
</div>
<!--  -->
<section class="body_element">
   <div class="body_item first">

<article class="f_item1">
    <!-- ////////////////////////////// -->
    <div class="scholar_img_cont"
     style="background:url('../src/icons/img1.png');
     background-repeat: no-repeat;
     ; background-size: 100% 100%;"> </div>
    <!-- //////////////////////// -->
    <div class="scholar_desc">
<div class="title">
    <h3>SCHOLARSHIP</h3>
    <div class="underline"></div>
</div>

        <span>Scholarship is your best option if you're looking for a way
        to finance your education. There are thousands of scholarship programs provided
        by Non-governmental organization as well as government organization that you can apply for.
                </span>

<p><span>Most scholarship programs are fully funded, they come with full tuition fee, free accomodation,
    living allowance and lot more. You can as well apply for scholarships outside the shores of your country. There are lots of 
    international scholarship opportunities and <a>Edudot</a> is here to help you get them so you just simply apply.
</span></p>

<p><span> For early high school leavers the right scholarship you will be looking for are undergraduate scholarship programs. But if you already have a college or bachelor degree and still want to forward
    your education, then you can explore other scholarship programs like <a> Masters</a> scholarship programs, <a>Ph.d</a> programs, <a>Post graduate</a> scholarship programs.

</span></p>

    </div>
</article>
<!-- /end of item 1/ -->

<article class="f_item2">
 
<div class="title">
    <h3>HOW TO APPLY FOR YOUR SCHOLARSHIP</h3>
    <div class="underline"></div>
</div>
<!-- ////////////////////////////////// -->
<section class="h_scholar_cont">
    
<article class="h_scholar_img"
 style="background:url('../src/icons/scholar.png');
 background-repeat: no-repeat;
     ; background-size: 100% 100%;"></article>
<!-- ////////// -->
<article class="h_scholar_desc">
    <span>
There are couple of scholarships on <a>Edudot</a> that you can apply for. its advisable you apply for as much scholarships as
you can to better your chances of wining one eventually. Double application on a single scholarship program is not allowed as this can lead to disqualification.

<p><span>Choose from the different category of scholarship that are provided on the website, there are international scholarship opportunities of top universities around the world that might interest you. 
    To ensure you don't apply for the wrong scholarship always check the <a>eligibility</a> of the scholarship you are applying for. 

</span></p>
</span>
</article>
<!-- ////////// -->
<article class="h_scholar_link">
    <!-- <div class="scholar_btn">
        <span id="s_link_title"> Canada Scholarship </span>
    </div> -->

    <!-- content for this section is displayed dynamically from index.js -->
</article>
<!-- ////////// -->
</section>

</article>
<!-- /end of item 2/ -->
<article class="f_item3">
<div class="title">
    <h3>KNOW THE TYPE OF VISA YOU NEED AS A STUDENT</h3>
    <div class="underline"></div>
</div>
<!-- /////////////////// -->
<section class="k_visa">
    <article class="k_visa_item1" 
    style="background:url('../src/icons/visa.png');
    background-repeat: no-repeat;
     ; background-size: 100% 100%;"></article>
    <!--  -->
 <article class="k_visa_item2">
<div class="v_type">Study</div>
<div class="v_type">Work</div>
<div class="v_type">Tourism</div>
 </article>
 <!--  -->
 <article class="k_visa_item3">
<span>While applying for a visa it's best you know what exactly the type of visa you should apply for.
    You might be thing! ok why do i need a visa? A visa is a legal document that enables an individual 
    which by the way is not a citizen of a country, to enter the country lawfully and stay for a period of time as per 
    the type of visa you have. There are different types of of visa; <a>The short stay visa</a>- this visa has a six month period of validity, and
    must be renewed if the holder wants to continue to stay else has to exit the country. The visa is for those who are traveling
    to study, business or tourism. <a> Airport transit visa</a> - this visa is for those who will be droping by on another country's airport to board a plane for travel.
    <a> Long stay visa</a> - this visa is those who are seeking to apply for a permanent residence(PR), it's a visa for stay more than six months.
</span>

<div class="a_btn">
    <form action="visa application.php">
    <button>Apply</button>
</form>
 </div>
 </article>
    <!--  -->
</section>
</article>

   </div>
   <!-- ////////////end of first element////////////////// -->
    <div class="body_item second">
    <div class="title">
    <h3>TOP SCHOLARSHIPS</h3>
    <div class="underline"></div>
</div>
<!-- /////////////////// --> 
<section class="s_items">
    <!-- single scholarship -->
    <?php  foreach($items as $i=> $item) :?>
     <?php if($i <= 7) :?>   
    <article>
       <div class="s_img" 
       style="background:url('<?php echo $item["avatar"]?>');
       background-size: 100% 100%; background-repeat:no-repeat">
        <div class="s_category"><?php echo $item["category"]?></div>
       <div class="s_country"><?php echo $item["country"]?></div>
       </div> 
       <div class="s_title">
           <form method="get" action="scholarship application.php" class="s_application_form">
               <input type="hidden" name="id" value="<?php echo $item["id"]?>"/>
        <button type="submit">   
            <span ><?php echo strtoupper($item["title"])?></span>
     </button>
     </form>
        </div>
    </article>
    <?php endif; ?>
    <?php endforeach; ?>
    <!-- end of single scholarship -->



    
</sectioin>

<div class="more_btn"><button class="more_button">More</button>

<article class="more_container">

<!-- <a class="more_list">canada scholarship</a>--> 
</article>
</div>
    </div>
</section>


<?php require_once "../src/footer.php" ?>