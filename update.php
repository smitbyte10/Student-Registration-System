<!-- For updating student records in the database, we have the following PHP code in `update.php`:  -->
 <?php

include 'db.php';

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$course=$_POST['course'];

mysqli_query($conn,
"UPDATE students
SET
name='$name',
email='$email',
mobile='$mobile',
course='$course'
WHERE id=$id");

header("Location:view.php");

?>