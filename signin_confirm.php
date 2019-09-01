<?php
require("connection.php");
error_reporting(0);
session_start();
session_regenerate_id( true);
	$uname=$_POST['uname'];
	$pass=sha1($_POST['pass']);
	if($uname != "" && $_POST['pass'] != "") {
		$query="SELECT * FROM members WHERE username='$uname' AND passwoard='$pass'";
		$data=mysqli_query($conn,$query);
		$total=mysqli_num_rows($data);
		if($total==1)
		{
			$_SESSION['uname']=$uname;
			header('location:index.php');
		}
		else{
			header('location:signin.php?er=1');
		}
	}
	else{
		header('location:signin.php?er=2');
	}
?>