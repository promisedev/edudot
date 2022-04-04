
let more_scholarship_btn = document.querySelector(".more_button");
let more_container =  document.querySelector(".more_container");


more_scholarship_btn.addEventListener("click", function(){
console.log("you clicked me!");
more_container.classList.toggle("show_morecontainer");

let scholar_nav_array3 = [
  
    {
          "id":1,
          "name":"Canada Scholarship",
          "link":"scholarship canada.php",
      },
    {       "id":2,
          "name":"USA Scholarship",
          "link":"scholarship usa.php",
      },
    {
          "id":3,
          "name":"UK Scholarship",
          "link":"scholarship uk.php",
      },
      {   "id":4,
          "name":"Germany Scholarship",
          "link":"scholarship germany.php",
      },
      {   "id":5,
          "name":"Nigeria Scholarship",
          "link":"scholarship nigeria.php",
      },
    ];
let single_scholar = scholar_nav_array3.map(function(list){
    
return `<a class="more_list" href="${list.link}" key="${list.id}">${list.name}</a>`;
}
).join("");

more_container.innerHTML = single_scholar;




let more_list =  document.querySelectorAll(".more_list");
more_list.forEach(function(list){
    list.classList.toggle("show_morelist");
});

});



// ///////////////////////////////
let slides = document.querySelectorAll(".slide_item");
// console.log(slides);


slides.forEach(function(slide, index){
    slide.style.left = `${index * 100}%`;
    });

let counter = 0;
setInterval(nextslide, 5000);

function nextslide(){
counter++;
if(counter === slides.length){counter = 0;}

slides.forEach(function(slide){
slide.style.transform = `translateX(-${counter * 100}%)` ;
});

}

// scholarship link array
const s_link = [
{"id": 1,
"name": "Canada Scholarship",
"link": "./scholarship canada.php"
},
{"id": 2,
"name": "UK Scholarship",
"link": "./scholarship uk.php"
},
{"id": 3,
"name": "USA Scholarship",
"link": "./scholarship usa.php"
},
{"id": 4,
"name": "Germany Scholarship",
"link": "./scholarship germany.php"
},
{"id": 5,
"name": "Nigeria Scholarship",
"link": "./scholarship nigeria.php"
},
];
let parent_cont = document.querySelector(".h_scholar_link");
let single_btn = s_link.map(function(link){
      return `<a href="${link.link}"><div class="scholar_btn">
    <span id="s_link_title"> ${link.name} </span>
</div></a>`

}).join("");
parent_cont.innerHTML = single_btn;

// console.log(single_btn);





