<html lang="en" dir="ltr">
<?php
session_start();
	$conn=mysqli_connect('localhost','root','123456789','user_profile');
	
	if(isset($_POST['pay'])){
		$name=$_POST['name'];
		$userId=$_POST['UserId'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$subs=$_POST['Subscription'];
		$cp=$_POST['cpassword'];
		
		if(strcasecmp($password,$cp)==0){
			$_SESSION['new']=[$name, $userId, $email, $dob, $phone, $password, $subs];
			if(isset($_SESSION['new'])){
				header('location:pay.php');
			}
		}
		else{ 
			echo '<script language="javascript">alert("Password and Confirm Password should be same!!!")</script>';
		}
	}
?>
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="new.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">New Subscription</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">User ID</span>
            <input type="text" placeholder="Enter your username" name="UserId" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
             <span class="details">Date of Birth</span>
         <input type="text" placeholder="Date of Birth(YYYY-MM-DD)" name="dob" required>
            </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" name="phone" maxlength=10 required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpassword" required>
          </div>
        </div>
        <div class="Subscription options">
          <input type="radio" name="Subscription" value="Amazon Prime" id="dot-1">
          <input type="radio" name="Subscription" value="Hotstar" id="dot-2">
          <input type="radio" name="Subscription" value="Netflix" id="dot-3">
          <span class="subscription-title">Subscription options</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="Subscription">Amazon Prime</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="Subscription">Hotstar</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="Subscription">Netflix</span>
            </label>
           
          </div>
        </div>
        <div class="button">
           
          <input type="submit" name="pay" value="Pay now">
        </div>
        
         
        
    </form>
    </div>
  </div>

</body>
<?php
mysqli_close($conn);
?>
</html>