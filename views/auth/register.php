<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>

<body>
    <style>
     body{
        background-color: #662549;

    }
    .register{
       
        background-color:#ccc;
        border:transparent;
        float:left;
        margin-left:40%;
        margin-top:25px;
        width: 380px;
        height:480px;
        border-radius:12px 15px;
        
    }
    .register h2{
         margin-left:32%;
    }
    .register p{
        margin-left:20px;
    }
    .register input{
        display:flex;
        flex-direction:column;
        padding:12px 90px;
       margin-top:-5px;
       margin-left:20px;
       border-radius:12px 15px;
       border:transparent;
        
        
        
    }
    .register select{
         display:flex;
        flex-direction:column;
        padding:12px 100px;
       margin-top:-5px;
       margin-left:20px;
       border-radius:12px 15px;
       border:transparent;
    }
     .register button{
        display:flex;
        flex-direction:column;
        padding:12px 60px;
       margin-top:-5px;
       margin-left:50px;
        border-radius:12px 15px;
       border:transparent;
       transition:all 0.5 ease-in-out ;
        
        
    }
    a{
        text-decoration:none;
    }
    button:hover{
         background-color: #662549;
        transform:scale(1.05);
    
    }
    
</style>
<div class="register">
<h2>Create Account</h2><br>

<form method="POST" action="../../controllers/AuthController.php">

<input type="text" name="name" placeholder="Full Name" required>
<br><br>

<input type="email" name="email" placeholder="Email" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<select name="role">
<option value="farmer">Farmer</option>
<option value="buyer">Buyer</option>
</select>

<br><br>

<button name="register">Register</button>
<p>i have already an account <a href="login.php">login</a></p>

</form>
</div>
</body>
</html>