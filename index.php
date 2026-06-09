<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>🎓 Student Registration</h2>
<p style="text-align:center;color:#666;margin-bottom:20px;">
Register your details below
</p>

<form action="insert.php" method="POST">

<input type="text"
name="name"
placeholder="Enter Name"
required>

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="text"
name="mobile"
placeholder="Enter Mobile"
required>

<input type="text"
name="course"
placeholder="Enter Course"
required>

<button type="submit">
Register
</button>

</form>

<br>

<a href="view.php">
View Students
</a>

</div>

</body>
</html>