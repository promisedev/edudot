<?php
require_once "../src/conn.php";

$statement = $pdo->prepare("SELECT * FROM scholarship WHERE country = 'canada' ORDER BY create_date DESC ");
$statement->execute();
$items = $statement->fetchall(PDO::FETCH_ASSOC);

?>

<?php 

var_dump($items);

?>