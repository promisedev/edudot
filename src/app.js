let url = document.URL.slice(31);


  if(url == "index.php"){document.title="Home - Edudot"; 
  document.description="edudot is a non-governmental organization, we provide scholarship opportunity and student visa application process"}
  else if(url == "application%20gateway.php")
  {document.title="User confirmation"}
else if(url == "content_management_system.php")
  {document.title="Admin"}
  else if(url == "donate%20confirmation.php")
  {document.title="Donate Confirmation"}
else if(url == "donate.php")
  {document.title="Donate"}
  else if(url == "generate.php")
  {document.title="UCC generation"}
else if(url == "scholarship%20application.php")
  {document.title="Scholarship application"; document.description="we provide list of scholarship a"}
else if(url == "scholarship%20canada.php")
  {document.title="Canada scholarship"}
else if(url == "scholarship%20germany.php")
  {document.title="Germany scholarship"}
  else if(url == "scholarship%20nigeria.php")
  {document.title="Nigeria scholarship"}
else if(url == "scholarship%20uk.php")
  {document.title="UK scholarship"}
  else if(url == "scholarship%20usa.php")
  {document.title="USA scholarship"}
  else if(url == "upload_scholarship.php")
  {document.title="New scholarship"}
  else if(url == "visa%20application.php")
  {document.title="Visa process"}
else if(url == "visa%20canada.php")
  {document.title="Canada visa process"}
else if(url == "visa%20germany.php")
  {document.title="Germany visa process"}
else if(url == "visa%20nigeria.php")
  {document.title="Nigeria visa process"}
  else if(url == "visa%20uk.php")
  {document.title="UK visa process"}
  else if(url == "visa%20usa.php")
  {document.title="USA visa process"}
// console.log(url);

// let window_info = window.getBoundingClientRect();
// console.log(window_info);
// ///////////////////
let nav_parent = document.querySelector(".nav_items");

let nav_array = [
    {"id":1,
        "name": "HOME",
    "link":"../index.php"},
{"id":2,
        "name": "SCHOLARSHIP",
    "link":[{
        "name":"Canada Scholarship",
        "link":"scholarship canada.php",
    },
{
        "name":"USA Scholarship",
        "link":"scholarship usa.php",
    },
{
        "name":"UK Scholarship",
        "link":"scholarship uk.php",
    },
    {
        "name":"Germany Scholarship",
        "link":"scholarship germany.php",
    },
    {
        "name":"Nigeria Scholarship",
        "link":"scholarship nigeria.php",
    },
]},
{"id":3,
"name": "VISA",
"link":[
    {
"name":"Visa Application",
"link":"visa application.php",
},
    {
"name":"Canada Visa",
"link":"visa canada.php",
},
{
"name":"USA Visa",
"link":"visa usa.php",
},
{
"name":"UK Visa",
"link":"visa uk.php",
},
{
"name":"Germany Visa",
"link":"visa germany.php",
},
{
"name":"Nigeria Visa",
"link":"visa nigeria.php",
},
]},

// {"id":4,
// "name": "DISCLAIMER",
// "link":"#disclaimer"},
];


let single_nav = nav_array.map(function(nav){
    // console.log(nav.id); 
    return `<li class="nav"  data-id = ${nav.id}><a id="${nav.id}" class="link" >${nav.name}</a></li>`;
  
}).join("");

nav_parent.innerHTML = single_nav;


window.addEventListener("DOMContentLoaded", function(){
let nav_btn = document.querySelectorAll(".nav");
nav_btn.forEach(function(btn){

   btn.addEventListener("click", function(e){
let h_element = e.currentTarget;
let my_ele = h_element.dataset.id;
let home = dataset="1" ;
if (my_ele == home){
let home_link = document.getElementById("1");
// let link = document.getElementsByClassName("link");
 home_link.setAttribute("href", "index.php");
}; 

});
let menu = document.querySelector(".dropdown");
btn.addEventListener("mouseover", function(e){
let h_ele = e.currentTarget;

let my_nav = h_ele.dataset.id;
// menu.classList.add("show_dropdown");
if(my_nav == 2 || my_nav == 3 ){
if(menu.classList.add("show_dropdown")){
} else {menu.classList.add("show_dropdown");
     menu.classList.remove("remove_dropdown");
    } 
} else{menu.classList.add("remove_dropdown") }

let btn_temp = h_ele.getBoundingClientRect();
let center = (btn_temp.left) - (btn_temp.left * 0.70) ;
if(my_nav == 2 || my_nav == 3 ){
menu.style.left = `${center}px`;
}
let my_menu = nav_array.map(function(nav, index){
    
    if(nav.id == my_nav){
        let single_item = nav.link.map(function(nav, index){
    return `<li key="${index+1}"><a href="${nav.link}">${nav.name}</a></li>`;
        }).join("");
        let list_cont = document.getElementById("nav_list");

        list_cont.innerHTML = single_item;
    // console.log(single_item);
    
    }

});

});

    setInterval(function(){
    // menu.classList.add("remove_dropdown");
if(menu.classList.add("remove_dropdown")){} else{ 
    //   menu.classList.add("remove_dropdown");
 }   
// console.log(menu);
},7000);

// end of foreach
});

// copyright
let mydate = new Date().getFullYear();
let copy = document.getElementById("copy");
// console.log(mydate);
copy.innerHTML = `&copy ${mydate}  all rights reserved.`;


// end of dom content



}); 
// message notification
let n_message = document.querySelector(".notification_message");
window.addEventListener("DOMContentLoaded", function(){



setTimeout(function(){
n_message.classList.add("n_display");
setTimeout(function(){
n_message.classList.remove("n_display"); 
 }, 7000);
}, 20000);

setInterval(() => {
  n_message.classList.add("n_display");
  setTimeout(function(){
n_message.classList.remove("n_display");  
}, 7000);
}, 110000);

});

// windows behavior
// window.addEventListener("scroll", function(){
//   let my_window = window.max-width;
// console.log(my_window);
// });

// /////////////////////////mobile div

let mobile_menu = document.querySelectorAll(".mobile_menu");
let close = document.querySelector(".close");
let open = document.querySelector(".open");
let mobile_side = document.querySelector(".mobile_side_cont");

mobile_menu.forEach(function(menu){

menu.addEventListener("click", function(){
  close.classList.toggle("show_close");
    open.classList.toggle("hide_open");
  mobile_side.classList.toggle("show_menu_side");


});

});

// /////mobile list//////////////////
let scholar_btn1 = document.querySelector("#mobile_li1");
let scholar_btn2 = document.querySelector("#mobile_li2");
let mobile_db1 = document.querySelector(".mobile_l_dropdown1");



let mobile_db2 = document.querySelector(".mobile_l_dropdown2");

let mobile_nav_array1 = [
  
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

let mobile_nav_array2 = [

{
  "id":1,
"name":"Visa Application",
"link":"visa application.php",
},
  {
  "id":2,  
"name":"Canada Visa",
"link":"visa canada.php",
},
{
  "id":3, 
"name":"USA Visa",
"link":"visa usa.php",
},
{"id":4, 
"name":"UK Visa",
"link":"visa uk.php",
},
{
  "id":5, 
"name":"Germany Visa",
"link":"visa germany.php",
},
{
  "id":6,
"name":"Nigeria Visa",
"link":"visa nigeria.php",
},
];

scholar_btn1.addEventListener("click", function(){
mobile_db2.classList.remove("show_mobiledropdown2");
mobile_db1.classList.toggle("show_mobiledropdown1");
let single_mobile_list = mobile_nav_array1.map(function(menu){
return `<a href="${menu.link}" key="${menu.id}" class="db1_list">${menu.name}</a>`
}).join("");

mobile_db1.innerHTML = single_mobile_list;

let db1_list = document.querySelectorAll(".db1_list");
db1_list.forEach(function(list){
  console.log(list);
list.classList.toggle("showdb1");
});

});
// ///////////////////////////
scholar_btn2.addEventListener("click", function(){
console.log("hello");
mobile_db1.classList.remove("show_mobiledropdown1");
mobile_db2.classList.toggle("show_mobiledropdown2");
let single_mobile_list = mobile_nav_array2.map(function(menu){
return `<a href="${menu.link}" key="${menu.id}" class="db2_list">${menu.name}</a>`
}).join("");
mobile_db2.innerHTML = single_mobile_list;



});




