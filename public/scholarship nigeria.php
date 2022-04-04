<?php
require_once "../src/header.php";
require_once "../src/conn.php";

$statement = $pdo->prepare("SELECT * FROM scholarship WHERE country = 'nigeria' ORDER BY create_date DESC ");
$statement->execute();
$items = $statement->fetchall(PDO::FETCH_ASSOC);
?>
<!-- body of our home page -->

<!-- slides -->
<div class="slide_container">
<div class="slide_item"style="background:url('../src/icons/covenant.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
2</div>
<!--  -->
<div class="slide_item"style="background:url('../src/icons/babcock.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
2</div>
<!--  -->
<div class="slide_item"style="background:url('../src/icons/rwth.png');background-repeat: no-repeat;
     ; background-size: 100% 100%;">
2</div>
<!--  -->
</div>
<!-- end of slide -->
<!-- //////////////////// -->
<section class="country_cont">
    <div class="country">
        <span><img src="../src/icons/place.png"/></span> 
        Nigeria</div>
<!-- / -->
<div class="filter_div2">
     <img src="../src/icons/filter.png" />
</div>

</section>
<div class="filter_item_cont">
     <ul class="mobile_filter">
<!-- <li>eree</li> -->

     </ul>     
</div>
<!-- //////////////////////////// -->
<div class="filter_div">
     <!-- <button>all</button> -->
<!-- button will display dynamically -->
</div>

<section class="s_display_div">
     <!-- single scholarship -->
         <!-- <article>
       <div class="s_img2" 
       style="background:url('');
       background-size: 100% 100%; background-repeat:no-repeat">
        <div class="s_category2">undergraduate</div>
       <div class="s_country2">nigeria</div>
       </div> 
       <div class="s_title2"><span >dhdhhhdhd</span></div>
    </article> -->
    <!-- end of single scholarship -->


</section>



<script>
let data = <?php echo json_encode($items) ?>;
let parent_filter_div = document.querySelector(".filter_div");
let mobile_filter = document.querySelector(".mobile_filter");
let scholarship_parent = document.querySelector(".s_display_div");



window.addEventListener("DOMContentLoaded", function(){
displayScholar(data);

let category = data.reduce(function(values, item){
  if(!values.includes(item.category)){
       values.push(item.category);
  }
  return values;
},["all"]);

let m_singlecat = category.map(function(cat, index){
return `<li data-id="${cat}" class="filter mobile">${cat}</li>`;

}).join("");
mobile_filter.innerHTML = m_singlecat;
// ////////////////////////////////

let singlecat = category.map(function(cat, index){
return `<button data-id="${cat}" class="filter">${cat}</button>`;

}).join("");
parent_filter_div.innerHTML = singlecat;

let f_buttons = document.querySelectorAll(".filter");

f_buttons.forEach(function(btn){

   btn.addEventListener("click",function(e){
        let my_btn = e.currentTarget.dataset.id;
          if (my_btn === "all"){
               displayScholar(data);
          } else {
        let menucat = data.filter(function(menu){
           if (menu.category === my_btn){return menu}
        });
        displayScholar(menucat);
     }
        //console.log(my_btn);
   } );  
});



// console.log(f_buttons);
// console.log(singlecat);
// console.log(category);
// console.log(parent_filter_div);
// console.log(data);
let mobile_btn = document.querySelector(".filter_div2");
let mobile_filter_cont = document.querySelector(".filter_item_cont");
let single_mobile_btn = document.querySelectorAll(".mobile");

mobile_btn.addEventListener("click",function(){
     mobile_filter_cont.classList.toggle("show_filter");
});

single_mobile_btn.forEach(function(btn){
 btn.addEventListener("click",function(e){
    let my_btn = e.currentTarget;

mobile_filter_cont.classList.remove("show_filter");
}); 
    
});
// ///////////////////////////

});

function displayScholar(item){
let single_scholar = item.map(function(scholar){

return `<article>
       <div class="s_img2" 
       style="background:url('${scholar.avatar}');
       background-size: 100% 100%; background-repeat:no-repeat">
        <div class="s_category2">${scholar.category}</div>
       <div class="s_country2">${scholar.country}</div>
       </div> 
       <div class="s_title2">
             <form method="get" action="scholarship application.php" class="s_application_form">
               <input type="hidden" name="id" value="${scholar.id}"/>
        <button type="submit">   
            <span >${scholar.title.toUpperCase()}</span>
     </button>
     </form>
       
     </div>
    </article>`;
}).join("");

scholarship_parent.innerHTML= single_scholar;
}
// ${scholar.title.toUpperCase()}




</script>
<?php
require_once "../src/footer.php"?>