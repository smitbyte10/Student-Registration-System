<?php
session_start();
include 'db.php';

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['admin'] = $username;
        header("Location:dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

 <!-- Login to access the admin dashboard and manage student records. -->   
<div class="container">
   
    <h2>🔐 Admin Login</h2>

    <form method="POST">

        <input type="text"
               name="username"
               placeholder="Enter Username"
               required>

        <input type="password"
               name="password"
               placeholder="Enter Password"
               required>

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>
</html>