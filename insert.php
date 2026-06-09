<?php

include 'db.php';

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$course=$_POST['course'];

$sql="INSERT INTO students(name,email,mobile,course)
VALUES('$name','$email','$mobile','$course')";

if(mysqli_query($conn,$sql))
{
echo "<script>
alert('Registration Successful');
window.location='index.php';
</script>";
}
else
{
echo "Error";
}

?>