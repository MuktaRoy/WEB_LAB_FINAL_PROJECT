<?php
require('connection.php');
error_reporting(0);
session_start();
session_regenerate_id( true);
if ($uname == true) 
{
	
}else
{
	header("location:signin.php");
}
$uname=$_SESSION['uname'];
$query="SELECT * FROM  file_collection WHERE username='$uname'";
$data=mysqli_query($conn,$query);
while ($file=mysqli_fetch_assoc($data)) {
	unlink($file['fileloc']);
}

$query2="DELETE FROM file_collection WHERE username='$uname'";
$data2=mysqli_query($conn,$query2);

$query3="SELECT * FROM  members WHERE username='$uname'";
$data3=mysqli_query($conn , $query3);
$profile=mysqli_fetch_assoc($data3);
if ($profile['propic']!="propic/5.jpg" && $profile['propic']!="propic/6.jpg") {
	unlink($profile['propic']);
}
$query4="DELETE FROM  members WHERE username='$uname'";
$data4=mysqli_query($conn , $query4);

if($data4){
	header("location:Signup.php");
}else{
	echo "somthing wrong try again !!!";
}	
?>
	