
<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}

include 'db.php';

$total_students = mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM students")
);

$total_courses = mysqli_num_rows(
mysqli_query($conn,"SELECT DISTINCT course FROM students")
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="container">

<div class="header">
<h2>📊 Admin Dashboard</h2>
<a href="logout.php" class="logout-btn">Logout</a>
</div>

<div class="cards">

<div class="card">
<h3>Total Students</h3>
<h1><?php echo $total_students; ?></h1>
</div>

<div class="card">
<h3>Total Courses</h3>
<h1><?php echo $total_courses; ?></h1>
</div>

</div>

<a href="view.php" class="btn">
Manage Students
</a>

<a href="index.php" class="btn">
Add Student
</a>

</div>
</html>