<?php
session_start();
require_once "../../config/database.php";
?>

<nav>
    <div class="navbar">

        <a href="../../public/header.php">Home</a> 
        <a href="../../views/dashboard/dachboard.php">dashboard</a>
           <a href="../../views/listings/create.php">create</a>
        <a href="../../public/index.php">Logout</a>
    </div>
    </nav><br>
<h1>Admin Dashboard</h1>

<h3>Harvest Listings</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Sector</th>
        <th>Total</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
<?php
$result = $conn->query("SELECT * FROM listings");

while($row = $result->fetch_assoc()){

$total = $row['quantity'] * $row['price'];
?>

<tr>
    <td><?=$row['id']?></td>
<td><?=$row['product']?></td>
<td><?=$row['quantity']?></td>
<td><?=$row['price']?></td>
<td><?=$row['sector']?></td>
<td><?=$total?></td>

<td>
<a href="../../models/create_update.php?id=<?= $row['id'] ?>">Update</a>
</td>

<td>
<a href="../../models/create_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a>
</td>


</tr>

<?php
}
?>

</table>

<br>
<h3>System Activity Logs</h3>

<<table border="1">
<tr>
    <th>User ID</th>
    <th>Action</th>
    <th>Date</th>
    <th>Update</th>
        <th>Delete</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM audit_logs");

while($row = $result->fetch_assoc()){
?>
<tr>
    <td><?php echo $row['user_id']; ?></td>
    <td><?php echo $row['action']; ?></td>
    <td><?php echo $row['created_at']; ?></td>

 <td>
<a href="../../models/farmer_updete.php?id=<?= $row['id'] ?>">Update</a>
</td>

<td>
<a href="../../models/farmer_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a>
</td>

</tr>
<?php
}
?>

</table>

<h3>Booking list</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>listing_id</th>
        <th>buyer_id</th>
        <th>quantity</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
<?php
$result = $conn->query("SELECT * FROM bookings");

while($row = $result->fetch_assoc()){

?>

<tr>
    <td><?=$row['id']?></td>
<td><?=$row['listing_id']?></td>
<td><?=$row['buyer_id']?></td>
<td><?=$row['quantity']?></td>

<td>
<a href="../../models/bookings_update.php?id=<?= $row['id'] ?>">Update</a>
</td>

<td>
<a href="../../models/bookings_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a>
</td>


</tr>

<?php
}
?>

</table>


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
        text-decoration:none;
         justify-content:space-between;
         padding:20px;
         color:black;
         transition:all 0.3s ease-in-out;
         font-weight:bold;
         font-size:20px;
    }
    a{
        text-decoration:none;
        color:black;
         transition:all 0.3s ease-in-out;
         font-weight:bold;
    }
    a:hover{
        color:orange;
        transform:scale(1.05);
    }
    .navbar a:hover{
        transform:scale(1.05);
        color:#ccc;
    }
    h1{
        color:#ccc;
       text-align: center;
       margin-top :90px;
       font-size:50px;


    }
      h3 {
        color:#ccc;
       text-align: center;
       margin-top :90px;
       font-size:20px;

    }
    table{
        color:#ccc;
        margin-left:38%;
        width: 350px;
        height:300px;
        border:2px solid black;
       
    }
    th {
            background-color: rgba(255,255,255,0.2);
        }

        /* Mobile responsiveness */
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            table {
                font-size: 12px;
            }

            h1 {
                font-size: 30px;
            }

            h3 {
                font-size: 18px;
            }
        }


</style>