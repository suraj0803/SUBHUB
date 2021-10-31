<!DOCTYPE html>
<html>
<?php
	$conn= mysqli_connect("localhost", "root","123456789","user_profile");
		if(!$conn){
			die("connection failed:". mysqli_connect_error());
		}
		
	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$q= "select * from person where email='$email'";
		if(mysqli_num_rows(mysqli_query($conn,$q))!=0){
			echo "<script language='javascript'>alert('The Email is already in use')</script>";
		}
		else{
			$query= "insert into person values('$name' , '$email' , '$password')";
			if(mysqli_query($conn, $query)){
				header('location:login.php');
			}
			else{
				echo "Error". mysqli_error($conn);
			}
		}
	}
	
	
	if(isset($_POST["login"])){
		$email= $_POST["email"];
		$password=$_POST["password"];
		
		$query="select * from person where email='$email'";
		$result=mysqli_query($conn, $query);
		
		if($result){
			if(mysqli_num_rows($result)>0){
				$user=mysqli_fetch_assoc($result);
				if(strcasecmp($user['password'], $password)==0){
					session_start();
					$_SESSION['user']=$user;
					if(isset($_SESSION['user'])){
						header('location:home.php');
					}
					else{
						echo 'not able to login';
					}
				}
				else{
					echo "<script type='text/javascript'> alert('Invalid Username or Password') </script>";
				}
			}
		}
	}
?>
<head>
<title> LOGIN</title>
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="bg">
<div class="card">
<div class="inner-box" id="card">
<div class="card-front">
   	<h2>LOGIN</h2>
   	<form method="post">
   	     <input type="email" class="input-box" placeholder="Your Email Id" name="email" required>
   	     <input type="password" class="input-box" placeholder="Password" name="password" required>
   	     <button type="submit" class="submit-btn" name="login">Login</button>
   	     <input type="checkbox"><span>Remember Me</span>
   	</form>	
   	<button type="button" class="btn" onclick="openRegister()">I'm new here</button>
   	<a href="">Forget Password</a>
</div>
<div class="card-back">
	<h2>REGISTER</h2>
   	<form method="post">
   		<input type="text" class="input-box" placeholder="Your Name" name="name" required>
   	     <input type="email" class="input-box" placeholder="Your Email Id" name="email" required>
   	     <input type="password" class="input-box" placeholder="Password" name="password" required>
   	     <button type="submit" class="submit-btn" name="submit">Submit</button>
   	</form>	
   	<button type="button" class="btn" onclick="openLogin()">I have an account</button>
</div>
        </div>
      </div> 
    </div>     
    <script src="login.js"></script> 
</body>
<?php
mysqli_close($conn);
?>
</html>