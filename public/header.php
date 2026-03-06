<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../views/auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>AgriStack Home</title>
</head>
<body>
    <nav>
        <div class="navbar">
        <?php if($_SESSION['user_role'] == 'Farmer'): ?>
            <a href="../views/listings/create.php">Post Listing</a> 
        <?php endif; ?>
         <a href="../views/dashboard/dachboard.php">dashboard</a>
           <a href="../views/listings/create.php">create</a>
             <a href="../views/dashboard/admin.php">list</a>
        <a href="../public/index.php">Logout</a>
    </nav>
        </div>
    <h1>Welcome to AgriStack</h1>
    
    <p>Welcome, <?php echo $_SESSION['user_name']; ?> (<?php echo $_SESSION['user_role']; ?>)</p>
    <div class="comm">
    <p>AgriStack is a digital platform that helps farmers manage their agricultural activities easily. <br>
    It allows users to organize farm data, track crops, and improve farming decisions using simple and efficient tools.<br>
     Our goal is to support farmers with technology that makes agriculture more productive and sustainable.
</p>
<div class="home-buttons">
    <div class="farm"><a href="../views/listings/create.php" >Add An Order</a></div>
    
    <div class="views"><a href="../views/dashboard/admin.php" >View My Order</a></div>
    
</div>
</div>
    <style>

         body{
        background-color: #662549;

    }
    h1{
        color:#ccc;
       text-align: center;
       margin-top :90px;
       font-size:50px;


    }
       p{

        color:black;
        font-size:20px;
        font-weight:bold;
        text-align:center;

    }
    .comm   p{

        color:#ccc;
        font-size:20px;
        font-weight:bold;
        text-align:center;

    }
    .navbar{
        display:flex;
        flex-direction:row;
        float:right;
        margin-right:30px;
       margin-top:-5%;
       
    }
    .navbar a{
         justify-content:space-between;
         padding:20px;
         color:black;
         transition:all 0.3s ease-in-out;
         font-weight:bold;
         font-size:20px;
         text-decoration:none;
    }
    .navbar a:hover{
        transform:scale(1.05);
        color:#ccc;
    }
    .home-buttons{
    margin-top:30px;
}

.farm a{
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
.views a{
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
    @media only screen and (max-width:768px){

    h1{
        font-size:35px;
        margin-top:60px;
    }

    p{
        font-size:18px;
        padding:10px;
    }

    .navbar{
        flex-direction:column;
        float:none;
        margin-right:0;
        margin-top:10px;
        align-items:center;
    }

    .navbar a{
        padding:10px;
        font-size:18px;
    }

    .farm a{
        margin-left:30%;
        padding:10px 12px;
    }

    .views a{
        margin-left:5%;
        padding:10px 12px;
    }

}
    </style>