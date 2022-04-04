<?php
require_once "../src/conn.php";
$errors=[];
$country = "";
$title = "";
$category = "";
$link = "";
$eligibility = "";
$steps = "";
$deadline = "";
$prize = "";
$create_date = "";

// var_dump($_FILES);
// exit;

if($_SERVER["REQUEST_METHOD"] === "POST"){
$country = $_POST["country"];
$title = $_POST["title"];
$category = $_POST["category"];
$link = $_POST["link"];
$eligibility = $_POST["eligible"];
$steps = $_POST["steps"];
$deadline = $_POST["deadline"];
$prize = $_POST["prize"];
$create_date = date('Y-m-d');
$image_path = "";

// check for error
if(!$country){$errors[] = "please country is required";}
if(!$title){$errors[] = "Scholarship title is required";}
if(!$category){$errors[] = "Category is required";}
if(!$link){$errors[] = "Scholarship link is required";}
if(!$eligibility){$errors[] = "Eligibility is required";}
if(!$steps){$errors[] = "Steps is required";}
if(!$deadline){$errors[] = "Deadline is required";}
if(!$prize){$errors[] = "please provide prize";}

if(!is_dir("../src/images")){
    mkdir("../src/images");
}

// 
if(empty($errors)){
$image = $_FILES["avatar"] ?? null;
if($image && $image["tmp_name"]){
$image_path = '../src/images/'.rand_num(9).'/'.$image["name"];
mkdir(dirname($image_path));

move_uploaded_file($image["tmp_name"], $image_path);

}

$statement = $pdo->prepare("INSERT INTO scholarship (country, title, category, prize, link,avatar,eligibility,
steps, deadline, create_date)
 VALUES (:country,:title,:category,
 :prize, :link, :avatar, :eligibility, :steps, 
 :deadline, :create_date)");

 $statement->bindValue(':country', $country);
$statement->bindValue(':title', $title);
$statement->bindValue(':category', $category);
$statement->bindValue(':prize', $prize);
$statement->bindValue(':link', $link);
$statement->bindValue(':avatar', $image_path);
$statement->bindValue(':eligibility', $eligibility);
$statement->bindValue(':steps', $steps);
$statement->bindValue(':deadline', $deadline);
$statement->bindValue(':create_date', $create_date);
$statement->execute();

 header("Location: content_management_system.php");
}
}

function rand_num($n){
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$str = "";

for($i = 0; $i <= $n; $i++){
$index =  rand(0, strlen($characters)- 1);
$str .= $characters[$index];

}
return $str;
}

?>
