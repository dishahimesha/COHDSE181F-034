<?php
if(isset($_COOKIE["user"]))
{
	header('Location:welcome.php');
}
	
$error=''; 

if(isset($_POST['submit'])){
	 if(empty($_POST['user']) || empty($_POST['pass']))
 {
	 echo $error;
 }
 else
 {
 

 $user=$_POST['user'];
 $pass=$_POST['pass'];

 $conn = mysqli_connect("localhost", "root", "");
 
 $db = mysqli_select_db($conn, "test");

 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
	 setcookie("user","$user",time()+360); 
     header("Location: welcome.php");
 }
 else
 {
 $error = "Invalid credentials!!!";
 }
 mysqli_close($conn); 
 }
}
 
?>