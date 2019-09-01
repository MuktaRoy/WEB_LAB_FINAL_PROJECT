<?php
require("connection.php");
error_reporting(0);
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=sha1($_POST['pass']);
$gender=$_POST['gender'];
$name= $_FILES["upic"]["name"];
if($fname != "" && $uname != "" && $email != "" && $pass != "" && sha1($_POST['rpass'])!="" && $gender!=""){
	if ($pass == sha1($_POST['rpass'])) {		
		
		if ($name == "") {			
			if ($gender == "male") {
				$folder="propic/male.png";
			}else{
				$folder="propic/female.png";
			}
		}else{
			$temp_name= $_FILES["upic"]["tmp_name"];
			$folder="propic/".$name;
			move_uploaded_file($temp_name, $folder);			
		}											
			$query="INSERT INTO members VALUES ('$uname', '$fname', '$email', '$pass','$folder','$gender')";
			$data=mysqli_query($conn , $query);
			if($data){
				header('location:signin.php');
			}else{
				header('location:signup.php?er=1');
			}							
	}else{
		header('location:signup.php?er=2');
	}
}else{
	header('location:signup.php?er=3');
}	
?>