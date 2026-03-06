<?php
session_start();
require_once "../config/database.php";

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

/* CHECK IF EMAIL EXISTS */
$check = $conn->prepare("SELECT id FROM users WHERE email=?");
$check->bind_param("s",$email);
$check->execute();
$result = $check->get_result();

if($result->num_rows > 0){
  
    echo "<script>
alert('Email already exists. Please use another email');
window.location.href='../views/auth/register.php';
</script>";


} else {

    $sql = "INSERT INTO users(name,email,password,role)
            VALUES(?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss",$name,$email,$password,$role);
    $stmt->execute();
     echo "<script>
alert('Registration successful. You can login now.');
window.location.href='../views/auth/login.php';
</script>";

    header("Location: ../views/auth/login.php");
}
}

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$email);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'role' => $user['role']
    ];  
    if ($user['role'] == 'Admin') {
        header("Location: ../views/dashboard/admin.php");
    } elseif ($user['role'] == 'Farmer') {
        header("Location: ../views/dashboard/farmer.php");
    } else {
        header("Location: ../views/dashboard/aggregator.php");
    }
} else {
  echo "<script>
alert('incorrect password or email!!');
window.location.href='../views/auth/login.php';
</script>";

}
if ($user) {
    
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_role'] = $user['role'];
        header("Location: ../public/header.php"); 
        exit();
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}

}
