<div class="login_form">
    <h2>login</h2>

<form method="POST" action="../../controllers/AuthController.php">

<input type="email" name="email" placeholder="Email"><br>

<input type="password" name="password" placeholder="Password"><br>

<button name="login">Login</button>
<p>i do not have an account <a href="register.php">register</a></p>


</form>
</div>

<style>

     body{
        background-color: #662549;

    }
    .login_form{
       
        background-color:#ccc;
        border:transparent;
        float:left;
        margin-left:40%;
        margin-top:25px;
        width: 380px;
        height:400px;
        border-radius:12px 15px;
        
    }
    .login_form h2{
         margin-left:40%;
    }
    .login_form p{
        margin-left:20px;
    }
    .login_form input{
        display:flex;
        flex-direction:column;
        padding:12px 90px;
       margin-top:12px;
       margin-left:20px;
       border-radius:12px 15px;
       border:transparent;
        
        
        
    }
     .login_form button{
        display:flex;
        flex-direction:column;
        padding:12px 60px;
       margin-top:12px;
       margin-left:80px;
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
