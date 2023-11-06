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

			//read from database
			$query = "select * from credentials where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			
			echo '<script type="text/javascript">
            window.onload = function () { document.getElementById("msg").textContent = "wrong username or password!"; }</script>';
		}else
		{
			echo '<script type="text/javascript">
            window.onload = function () { document.getElementById("msg").textContent = "wrong username or password!"; }</script>';
		}
	}

?>




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
			<h1 class="h2 mb-5">Login</h1>

			

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
					<button type="submit" value="Login" class="btn btn-primary submit-btn w-100">Enter</button>
					
				</div>
				<p style="color:red"  id="msg" class="color-red"></p>
				<br>
				<a href="signup.php">Click to Signup</a>
			</form>
			
			<a  href="#">Forgot Password?</a>
			
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