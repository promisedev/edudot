
 <!DOCTYPE html>
 <html>
     <head>
         <title> Edudot</title>
<meta charset = "utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale = 1.0"/>
<meta name="description" content=""/>
<link rel="icon" href="../src/icons/logo2.png">
     </head>
<link rel="stylesheet" href="../src/index.css"/>
<link rel="stylesheet" href="../src/app.css"/>
<link rel="stylesheet" href="../src/scholar.css"/>

<link rel="stylesheet" href="../src/visa.css"/>
     <body>
     <noscript><strong>We're sorry but edudot doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript> 
<div class ="logo_element"> 
<article class="logo_div"><img src="../src/icons/logo.png" alt=""/> </article>
<article class="mobile_menu open">&#9776; <!--&#10006;--> </article>
<article class="mobile_menu close">&#10006;</article>
</div>
<!-- ////////////////////////////////// -->

<article class="mobile_side_cont">
<section class="mobile_side_nav" >
<article class="nav_background">
<span class="bubble1"></span>
<span class="bubble2"></span>
<span class="bubble3"></span>
<span class="bubble4"></span>
<span class="bubble5"></span>
<span class="bubble6"></span>
<span class="bubble7"></span>
</article>

<article class="mobile_nav_list">
<a class="mobile_li" href="index.php">HOME</a>
<a class="mobile_li" id="mobile_li1">SCHOLARSHIP</a>
<div class="mobile_l_dropdown1">
  <!-- <a>canada</a>   -->
 <!-- <a>canada</a>   -->
   <!-- <a>canada</a>   -->
<!-- <a>canada</a>   -->
   <!-- <a>canada</a>   -->
</div>
<!--  -->
<a class="mobile_li" id="mobile_li2">VISA</a>
 <div class="mobile_l_dropdown2">
  <a></a>  
</div>
</article>
</section>
</article>
<!-- menu div -->
<div class="menu_div">
    <!-- search -->
<article class="menu_article search_div">
    <form method="get" action="search.php">
        <input type="search"name="search" placeholder="Search for scholarship..."/>
        <button type="submit"><img src="../src/icons/search.png"/> </button>
</form>
</article>
<!-- navigation -->
<article class="menu_article navigation">
   <div class="nav_div">
  <ul class="nav_items">
     <!-- <li> HOME</li>  -->
  <!-- this item will  e displayed dynamically from app.js -->
  </ul>
  <article class="dropdown">
     <ul id="nav_list" class="nav_list">
         <!-- <li></li> -->
     </ul> 
  </article>
   </div>

   
   <!--  -->
   <div class="donate_div">
   <form method="post" action="donate.php">
    <input type="hidden"  name ="" value=" "/>
  <button type="submit">DONATE</button> 
</form>

</div>
</article>
</div>
<div class="notification_message">
<article class="notify_desc">
    <div class="notify_cont"><span>As a non-profit organization, we reply more on your donation
         , your donation will 
         go a long way to help us continue to provide 
scholarship information to all our extreme users. </span> 
<!--  -->
<div class="notify_btn_div">
    <form method="post" action="donate.php">
    <input type="hidden"  name ="" value=" "/>
  <button type="submit">DONATE</button> 
</form>
</div>
<!--  -->
</div>
</article>
</div>
<!-- end of menu -->
     
