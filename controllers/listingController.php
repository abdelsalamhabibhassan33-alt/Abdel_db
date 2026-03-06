<?php

require_once "../config/database.php";

if(isset($_POST['create'])){

$product = $_POST['product'];
$qty = $_POST['quantity'];
$price = $_POST['price'];
$sector = $_POST['sector'];
$farmer = $_POST['farmer_id'];

$sql = "INSERT INTO listings(product,quantity,price,sector,farmer_id)
VALUES(?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sidsi",$product,$qty,$price,$sector,$farmer);

$stmt->execute();

header("Location: ../views/dashboard/farmer.php");


}