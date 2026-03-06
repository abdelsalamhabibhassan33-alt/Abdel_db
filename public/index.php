<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>AgriStack</title>
</head>

<body>

<style>

    body{
        background-color: #662549;

    }
    h1{
        color:black;
       text-align: center;
       margin-top :90px;
       font-size:50px;


    }
    p{

        color:#ccc;
        font-size:20px;
        font-weight:bold;
        text-align:center;

    }
    .login a{
     margin-top:20px;
     text-decoration:none;
        background-color:#ccc;
        padding:12px 15px;
        color:black;
        align-items:center;
        display:flex;
        flex-direction:row;
        float:left;
        margin-left:42%;
        border-radius:12px;
        transition:all 0.5 ease-in-out ;
    }
   .register a{
        margin-top:20px;
        text-decoration:none;
        background-color:#ccc;
        padding:12px 15px;
        color:black;
        align-items:center;
        display:flex;
        flex-direction:row;
        float:left;
        margin-left:2%;
        border-radius:12px;
        transition:all 0.5 ease-in-out ;
    }
    a:hover{
        transform:scale(1.05);
    }

    @media only screen and (max-width:768px) {

    h1{
        font-size:35px;
        margin-top:60px;
    }

    p{
        font-size:18px;
    }

    .login a{
        margin-left:35%;
        padding:10px 12px;
    }

    .register a{
        margin-left:3%;
        padding:10px 12px;
    }

}
</style>
<h1>Irish Potato Marketplace</h1><br>

<p>Welcome to AgriStack Platform</p>
<div class="login">
<a href="../views/auth/login.php">Login</a>
</div>
<div class="register">
<a href="../views/auth/register.php">Register</a>
</div>
</body>
</html>