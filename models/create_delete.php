<?php
require_once "../config/database.php";

$id = $_GET['id'];

$sql = "DELETE FROM listings WHERE id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i",$id);

$stmt->execute();

header("Location: ../views/dashboard/admin.php");
?>