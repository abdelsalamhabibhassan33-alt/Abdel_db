<?php

$conn = new mysqli("localhost","root","","agristack_db");

if($conn->connect_error){
    die("Connection failed");
}

?>