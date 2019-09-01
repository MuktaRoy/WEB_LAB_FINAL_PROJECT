<?php
require('connection.php');
session_start();
session_regenerate_id( true);
if ($_SESSION['uname']) 
{
	
}else
{
	header("location:signin.php");
}
$uname=$_SESSION['uname'];
$query="select * from members where username='$uname'";
$data=mysqli_query($conn,$query);
$info=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<title>Mukta555| About us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f717478b5d.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Atomic+Age|Eagle+Lake|Fjalla+One|Merriweather|Orbitron&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 name_head" >
				<a href="index.php"><h2 class="float-left some">mukta22</h2></a>
				<p class="float-right ">Keep your file safe</p>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top ">
		<a href="#" class="navbar-brand">
			<img src="img/img1.jpg" style="width: 50px; height: 25px;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsenav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link active">Home</a>
				</li>
				<li class="nav-item">
					<div class="dropdown">
						<button class="btn btn-dark dropdown-toggle" data-toggle="dropdown"><?php echo $info['name']; ?></button>
						<div class="dropdown-menu">
							<a href="change_propic.php" class="dropdown-item">Update Profile Pictute</a>
							<a href="change.php" class="dropdown-item">Change password</a>
							<a href="delete.php" class="dropdown-item">Delete profile</a>
							<a href="logout.php" class="dropdown-item">log out</a>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<a href="upload.php" class="nav-link ">upload</a>
				</li>
				<li class="nav-item">
					<a href="about.php" class="nav-link">About us</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="team text-center col-sm-8">
				<h2>Our Team</h2>
				<span class="line"></span>
				<div class="team_img">
					<a href="#mukta"><img src="our_profile/mukta.jpg" alt="mukta"></a>
					<a href="#mukta2"><img src="our_profile/mukta2.jpg" alt="mukta2"></a>
					<a href="#mukta3"><img src="our_profile/mukta3.jpg" alt="mukta3"></a>
				</div>
				<div class="select" id="mukta">
					<div class="name text-center text-uppercase">Mukta Roy</div>
					<div class="sub text-center text-uppercase">Web designer</div>
					<span class="line"></span>
					<p class="text-justify">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
					</p>
					<a class="custombtn" href="#" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="custombtn" href="#" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
					<a class="custombtn" href="#">
						<i class="fab fa-google"></i>
					</a>
					<a class="custombtn" href="#">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="custombtn" href="#">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
				<div class="select" id="mukta2">
					<div class="name text-center text-uppercase">Mukta2 Roy</div>
					<div class="sub text-center text-uppercase">Web developer</div>
					<span class="line"></span>
					<p class="text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
					</p>
					<a class="custombtn" href="https://www.facebook.com/mukta.roy.564813" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="custombtn" href="https://twitter.com" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
					<a class="custombtn" href="muktaroyrk@gmail.com">
						<i class="fab fa-google"></i>
					</a>
					<a class="custombtn" href="#">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="custombtn" href="Youtube.com">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
				<div class="select" id="mukta3">
					<div class="name text-center text-uppercase">Mukta3 Roy</div>
					<div class="sub text-center text-uppercase">Web designer</div>
					<span class="line"></span>
					<p class="text-justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                    </p>
					<a class="custombtn" href="#" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="custombtn" href="#" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
					<a class="custombtn" href="#">
						<i class="fab fa-google"></i>
					</a>
					<a class="custombtn" href="#">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="custombtn" href="#">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer" class="bg-dark fixed-bottom"> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<p class="text-info">Copyright &copy;aaaalllammmamki88 </p>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</footer>
</body>
</html>