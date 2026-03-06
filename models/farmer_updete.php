<?php
require_once "../config/database.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM audit_logs WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$listing = $_POST['user_id'];
$buyer = $_POST['action'];


$sql = "UPDATE audit_logs 
        SET user_id=?, action=?
        WHERE id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii",$listing,$buyer,$id);

$stmt->execute();

header("Location: ../views/dashboard/admin.php");
}
?>
<div class="for_create">
<h2>Update List</h2>

<form method="POST">


<input type="text" name="user_id" placeholder="user_id" value="<?= $row['user_id'] ?>"><br><br>

<input type="text" name="action" placeholder="action" value="<?= $row['action'] ?>"><br><br>

<div class="back"><a href="../views/dashboard/admin.php">Back</a></div>
<button type="submit" name="update">Update</button>

</form>
</div>
 <style>
     body{
        background-color: #662549;

    }

    .for_create{
       
        background-color:#ccc;
        border:transparent;
        float:left;
        margin-left:40%;
        margin-top:80px;
        width: 380px;
        height:300px;
        border-radius:12px 15px;
        
    }
    .for_create h2{
         margin-left:30%;
    }
    .for_create p{
        margin-left:20px;
    }
    .for_create input{
        display:flex;
        flex-direction:column;
        padding:12px 90px;
       margin-top:-5px;
       margin-left:20px;
       border-radius:12px 15px;
       border:transparent;
        
        
        
    }
    .for_create select{
         display:flex;
        flex-direction:column;
        padding:12px 100px;
       margin-top:-5px;
       margin-left:20px;
       border-radius:12px 15px;
       border:transparent;
    }
     .for_create button{
        display:flex;
        flex-direction:column;
        padding:12px 60px;
       margin-top:-30px;
       margin-left:50px;
        border-radius:12px 15px;
       border:transparent;
       transition:all 0.5 ease-in-out ;
       background-color:#662549;
       color:#ccc;
         margin-left:30%;
        
        
    }
    a{
        text-decoration:none;
    }
    .back a{
        background-color:#662549;
        padding:12px 13px;
        border-radius:12px 15px;
        color:#ccc;
        margin-top:-25px;
        margin-left:10%;
    }
    button:hover{
    
        transform:scale(1.05);
    
    }
     @media (max-width: 480px) {
        .for_create {
            padding: 20px 15px;
        }

        .for_create input, .for_create button {
            padding: 10px;
            font-size: 14px;
        }

        .navbar a {
            font-size: 16px;
        }

        .for_create h2 {
            font-size: 22px;
        }
    }
</style>