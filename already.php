<html lang="en" dir="ltr">
<?php
	$conn=mysqli_connect('localhost','root','123456789','user_profile');
	
	if(isset($_POST['save'])){
		$name=$_POST['name'];
		$username=$_POST['Username'];
		$email=$_POST['email'];
		$sdate=date_format(date_create($_POST['startdate']), "Y/m/d");
		$edate=date_format(date_create($_POST['enddate']), "Y/m/d");
		$phone=$_POST['phone'];
		$sp=$_POST['ServicePLatform'];
		$smonth=intval(substr($sdate, 5,2));
		$emonth=intval(substr($edate, 5,2));
		$status='';
		$plan='';
		$x=0;
		if($smonth==$emonth){
			$x=0;
		}
		elseif($smonth<$emonth){
			$x=$emonth-$smonth;
		}
		else{
			$x=$emonth+12-$smonth;
		}
		if($x==0){
			$plan='annual';
		}
		elseif($x==3){
			$plan='Quarter';
		}
		elseif($x==1){
			$plan='monthly';
		}
		else{
			echo '<script language="javascript"> alert("Please choose correct dates of plan")</script>';
		}
		
		$curr_date=date('Y/m/d');
		if($curr_date>$edate){
			$status='Expired';
		}
		else{
			$status='Active';
		}
		
		$q="insert into subscription values('$name', '$username', '$email','$sdate', '$sp' , '$edate', '$phone','$plan', '$status')";
		if(mysqli_query($conn,$q)){
			echo '<script language="javascript"> alert("Saved Successfully")</script>';
		}
		else{
			echo mysqli_error($conn);
		}
	}
?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="already.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Add Subscription Details</div>
    <div class="content">
      <form method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="Username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Start Date</span>
            <input type="date" placeholder="Start Date" name="startdate" required>
          </div>
          <div class="input-box">
            <span class="details">End Date</span>
            <input type="date"  placeholder="Expiry Date" name="enddate" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your number" name="phone" maxlength=10 required>
          </div>
        </div>
        <div class="ServicePlatform">
          <span class="details">Service Platform</span>
          <input type="radio" name="ServicePLatform" value="Netflix" id="dot-1">
          <input type="radio" name="ServicePLatform" value="Amazon Prime" id="dot-2">
          <input type="radio" name="ServicePLatform" value="Disney HotStar" id="dot-3">
          <span class="ServicePLatform"></span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="service-platform">Netflix</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="service-platform">Amazon Prime</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="service-platform">Disney HotStar</span>
            </label>
          </div>
        </div>
        <center><div class="button">
          <div class="btn">
            <input type="submit" name="save" value="Save">
            <input type="button" name="cancel" value="Cancel" onclick='window.history.go(-1)'>
          </div> <span></span>
        </div></center>
      </form>
    </div>
  </div>

</body>
<?php
mysqli_close($conn);
?>
</html>