<?php

require_once "../config/database.php";

if(isset($_POST['book'])){

$listing = $_POST['listing_id'];
$buyer = $_POST['buyer_id'];
$qty = $_POST['quantity'];

$sql = "INSERT INTO bookings(listing_id,buyer_id,quantity)
VALUES(?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii",$listing,$buyer,$qty);

$stmt->execute();

header("Location: ../views/dashboard/buyer.php");
}
if(isset($_POST['approve'])){

    $user_id = $_POST['user_id'];
    $action = $_POST['action'];
    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO audit_logs(user_id, action, created_at)
            VALUES(?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $user_id, $action, $date);

    $stmt->execute();

    header("Location: ../views/dashboard/admin.php");
    
}

