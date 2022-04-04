<?php
require_once "../src/header.php";
require_once "../src/conn.php";
?>
   <!-- /// -->
<section class ="visa_cont"> 
    <article class="visa_divs v_div1">
        <div class="v_title"><span>Who needs a Visa?</span></div>
        <div class="v_desc">
            <span> A visa is a legal document that enables the holder to enter a foreign country lawfully.
            So far you are not a citizen of the country that you are about to
            to travel to, you will need a visa. There are different categories of visas issues by different countries,
            these visas are divided into two- <a>Non-Immigrant Visas</a>. This visa is issued for short term travels, If you are traveling for business, tourism, work, studying and visiting relatives. <a> Immigrant Visas</a>, this visa is issued to persons that want to move permanently to another country.

            <p>If you are already a citizen of the country your are about traveling to you will not need a visa. Apart from been a citizen, if your country has relationship with the country of your destination you might as well not 
                need a visa.
            </P>
            </span>
        </div>
    </article>
<!--  -->
<article class="visa_divs v_div2">
<div class="v_title"><span>Types of Visa</span></div>

        <div class="v_desc">
            <span>
                <ul>
                    <li>Short stay Visa</li>
                    <li>Airport transit Visa</li>
                    <li>Long stay Visa</li>
                    
                </ul>
            </span>
        </div>
</article>
<!--  -->
<article class="visa_divs v_div3">
<div class="v_title"><span>Critaria to Apply for Visa</span></div>
        <div class="v_desc">
            <span><ul>
                    <li>To apply for visa you must have a passport.</li>
                    <li>Your passport must be valid for atleast six months beyound your anticipated stay.</li>
                    <li>To apply for visa your passport must have atleast one blank page.</li>
                    <li>A clear photograph.</li>
                    <li>Sponsorship document.</li>
                    <li>You will be in good health.</li>
                    <li>There must be no criminal record.</li>
                    <li>You must have proof of fund that will sustain you as you travel.</li>


                </ul> </span>
        </div>
</article>
<!--  -->
<article class="visa_divs v_div4">
<div class="v_title"><span>How to Apply</span></div>
        <div class="v_btn">
            <!--  -->
        <!-- <button class="visa_btn">
        <span id=""> Canada Visa </span>
        </button> -->
    <!--  -->
    
        </div>
</article>
<!--  -->

</section>

<script>
    let links = [
        {"id":1, "name":"Canada Visa", "link": "visa canada.php"},
         {"id":2, "name":"UK Visa", "link": "visa uk.php"},
          {"id":3, "name":"USA Visa", "link": "visa usa.php"},
            {"id":4, "name":"Germany Visa", "link": "visa germany.php"},
          {"id":5, "name":"Nigeria Visa", "link": "visa nigeria.php"},
        ];

let v_parent = document.querySelector(".v_btn");

let single_v_btn = links.map(function(btn, index){
    return `<a href="${btn.link}" class="visa_btn" key="${index}">
        <span id=""> ${btn.name} </span></a>`;
}).join("");

v_parent.innerHTML = single_v_btn;
</script>

<?php
require_once "../src/footer.php"?>