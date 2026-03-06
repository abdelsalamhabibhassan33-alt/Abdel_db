
 <nav>
    <div class="navbar">

        <a href="../../public/header.php">Home</a> 
         <a href="../../views/dashboard/dachboard.php">dashboard</a>
             <a href="../../views/dashboard/admin.php">list</a>
        <a href="../../public/index.php">Logout</a>
    </div>
    </nav><br>

    <div class="for_create">
<form method="POST" action="../../controllers/ListingController.php">
<h2>Creater_Order</h2>
<input type="text" name="product" placeholder="Product"><br>

<input type="number" name="quantity" placeholder="Quantity"><br>

<input type="number" name="price" placeholder="Price"><br>

<input type="text" name="sector" placeholder="Sector"><br>

<input type="hidden" name="farmer_id" value="1"><br>

<button name="create">Post Listing</button>

</form>
</div>
    <style>
     body{
        background-color: #662549;

    }
    .navbar{
        display:flex;
        flex-direction:row;
        float:right;
        margin-right:30px;
        padding:20px;
       
    }
    .navbar a{
         justify-content:space-between;
         padding:20px;
         color:black;
         transition:all 0.3s ease-in-out;
         font-weight:bold;
         font-size:20px;
    }
    .navbar a:hover{
        transform:scale(1.05);
        color:#ccc;
    }
    .for_create{
       
        background-color:#ccc;
        border:transparent;
        float:left;
        margin-left:40%;
        margin-top:80px;
        width: 380px;
        height:400px;
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
       margin-top:-5px;
       margin-left:50px;
        border-radius:12px 15px;
       border:transparent;
       transition:all 0.5 ease-in-out ;
       background-color:#662549;
       color:#ccc;
         margin-left:24%;
        
        
    }
    a{
        text-decoration:none;
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