<?php

$conn = mysqli_connect("localhost", "root", "", "authentication") or die('Error');

$error=''; 
if(isset($_POST['submit'])){
if(empty($_POST['user']) || empty($_POST['pass'])){
$error = "Pogresan username ili password";
}
else
{
$user=$_POST['user'];
$pass=md5($_POST['pass']);
//$db = mysqli_select_db($conn, "test");
$query = mysqli_query($conn, "SELECT * FROM `users` WHERE password='$pass' AND username='$user'");
echo "SELECT * FROM `users` WHERE pass='$pass' AND user='$user'";
var_dump($query);
$rows = mysqli_num_rows($query);
if($rows){
$_SESSION['is_logged']  = 1;
header("Location: welcome.php");
}
else
{
$error = "Pogresan username ili password";
}
mysqli_close($conn);
}
}

?>