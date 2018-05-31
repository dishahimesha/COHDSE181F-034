<html>
<head>
</head>
<title>informationss</title>
<body>
<style>
body{
	background-image:url(883752.png);
	font-size:30px;
	font-style:oblique;
	font:"Times New Roman", Times, serif;
	color:#FFF;
	im
	
}
</style>
</body>
</html>

<?php

if(isset($_COOKIE["user"]))
{
	$user=$_COOKIE["user"];
	echo"welcome,$user"."<br/>";
	
}
else
{
	header('Location:Login.php');
}
echo'<input type=\'submit\' name=\'btnLogout\' value=\'Logout\'>';
if(isset($_POST['btnLogout']))
{
	setcookie("user","$user",time()-360);
	header("Refresh:0");
}

?>