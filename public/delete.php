<?php
require_once "../src/conn.php";
$id= $_POST["id"] ?? null;

if(isset($_POST["id"])){

$statement = $pdo->prepare("DELETE FROM scholarship WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();

header("Location: content_management_system.php");
}

?>