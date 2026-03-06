<?php

if($user && password_verify($password,$user['password'])){

$_SESSION['user']=$user;

header("Location: header.php");

}