<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into credentials (user_id,username,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="./css/custom.css" rel="stylesheet" />
</head>
<body>


	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en"> 
   <head>
  
  <title>StreamSB</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="./css/style.css" rel="stylesheet">

  </head>

<body>

  <main>

<div class="login" id="login">
	<div class="m-auto">
		<div class="login-logo">
			<a href="index.php">
				<img src="./img/logo.svg" alt="">
			</a>
		</div>
		<a href="index.php" class="btn login-back">
			<i class="icon icon-prev icon-size-14 text-muted me-2"></i> Go home </a>
		<div class="login-form text-center">
			<h1 class="h2 mb-5">Sign Up</h1>

			

			<form method="POST">
				<input type="hidden" name="op" value="login">
				<input type="hidden" name="redirect" value="/?op=upload">
				<div class="mb-3">
					<input type="text" class="form-control" name="user_name" value="" placeholder="Username">
				</div>
				<div class="mb-3">
					<div class="showpass">
						<button type="button" class="btn icon-btn" onclick="showpass(this);">
							<i class="icon icon-eye icon-size-16"></i>
						</button>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
				</div>
				
				<div class="mb-3">
					<button type="submit" class="btn btn-primary submit-btn w-100" value="Signup">Enter</button>
					
				</div>
				<a href="login.php">Login</a>
			</form>
		</div>
	</div>
</div>

<script>


function showpass(a){
  var e = a.nextElementSibling;
  e.type == 'password' ? e.type = 'text' : e.type = 'password';
}

</script>

</main>
</body>
</html>