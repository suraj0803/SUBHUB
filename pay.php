<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();
$conn= mysqli_connect('localhost','root','123456789','user_profile');

if(isset($_POST['pay'])){
	$today= date('Y/m/d');
	$n=intval($_POST['optradio']);
	$new=strtotime("+ $n months");
	$enddate=date('Y/m/d',$new);
	$sub=$_SESSION['new'];
	$plan='';
	if($n==1){
		$plan='monthly';
	}
	elseif($n==3){
		$plan='Quater';
	}
	else{
		$plan='annual';
	}
	$q="insert into subscription values('$sub[0]','$sub[1]','$sub[2]','$today', '$sub[6]', '$enddate', '$sub[4]','$plan'  ,'Active')";
	if(mysqli_query($conn,$q)){
		echo "<script language='javascript'>alert('Paid successfully')</script>";
	}
	else{
		echo mysqli_error($conn);
	}
}
?>
  <head>
    <link rel="stylesheet" href="pay.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">SUBHUB</a>
      </div>
      <ul>
        <li><a href="">About</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Contact</a></li>
	<li><a href="">Sign In</a></li>
	<li><a href="">Sign Up</a></li>
      </ul>
    </div>
  </nav>
<!--   <div class="img"></div> -->
  <div class="center">
    <div class="title">Choose Your Subscription</div>
<!--     <div class="sub_title">At One Place </div>
    <div class="btns">
    <button onclick="location.href=''" type="button">Already</button>
   <a href="/Users/tapesshhh/Desktop/untitled folder/codes/new/new.html"> <button onclick="location.href=''" type="button">New</button></a>
    </div> -->
  </div>
  <form method="post">
    <div class="container">
    <div class="radio">
  <label><input type="radio" value=1 name="optradio"> Monthly : INR 499</label>
</div><br><br>
<div class="radio">
  <label><input type="radio" value=3 name="optradio"> Quaterly : INR 999</label>
</div><br><br>
<div class="radio disabled">
  <label><input type="radio" value=12 name="optradio" checked> Yearly : INR 2299</label>
</div>    
  <div class="button">
          <div class="btn">
            <input type="submit" name="pay" value="Proceed">
          </div> <span></span><br>
        </div>
    </div>
    </form>
</body>
<?php
mysqli_close($conn);
?>
</html>