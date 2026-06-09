<!-- // view page to manage students (edit/delete) -->


<?php
include 'db.php';

$search="";

if(isset($_GET['search']))
{
    $search=$_GET['search'];

    $result=mysqli_query($conn,
    "SELECT * FROM students
    WHERE name LIKE '%$search%'
    OR email LIKE '%$search%'
    OR course LIKE '%$search%'");
}
else
{
    $result=mysqli_query($conn,
    "SELECT * FROM students");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="admin.css">
<title>Students List</title>
</head>
<body>
<div class="container">

<div style="display:flex;justify-content:space-between;align-items:center;">
    <h2>📚 Student Records</h2>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

<br>
<!-- Search for students by name, email or course: -->
    <form method="GET" class="search-form">

<input
type="text"
name="search"
placeholder="🔍 Search by Name, Email or Course"
value="<?php echo $search; ?>">

<button type="submit">
Search
</button>

</form>

<br>

 <!-- Student Table: -->
<table class="student-table">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Course</th>
<th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['course']; ?></td>

<td>
<a class="edit-btn"
href="edit.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a class="delete-btn"
href="delete.php?id=<?php echo $row['id']; ?>">
Delete
</a>
</td>

</tr>

<?php
}
?>

</table>

</div>
</html>