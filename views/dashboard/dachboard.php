
<h1>Dachboard</h1>


<div class="farmer">
<a href="farmer.php">Farmer</a>
</div>
<div class="admin">
<a href="admin.php">Admin</a>
</div>
<div class="buyer">
<a href="buyer.php">Buyer</a>
</div>
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

    .farmer a{
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
    .admin a{
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
   .buyer a{
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
     @media (max-width: 480px) {
        h1 {
            font-size: 32px;
            margin-top: 50px;
        }

        .role {
            font-size: 16px;
            padding: 12px 20px;
            width: 80%;
        }

        .roles {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>