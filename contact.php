<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<?php
session_start();
$conn= mysqli_connect('localhost','root','123456789','user_profile');

if(isset($_POST['send']) && isset($_SESSION['user'])){
	$message=$_POST['message'];
	$email=$_SESSION['user']['email'];
	$query="insert into message values('$email', '$message')";
	if(mysqli_query($conn, $query)){
		echo "<script language='javascript'>alert('Message sent!!!!')</script>";
	}
	else{
		echo "<script language='javascript'>alert('Please sign in')</script>";
	}
}
?>
  <head>
    <meta charset="UTF-8">
   <title> Responsive Contact Us Form  | CodingLab </title>
    <link rel="stylesheet" href="contact.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Sector 125</div>
          <div class="text-two">NOIDA</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">1234567890</div>
          <div class="text-two">9876543210</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">subhub@gmail.com</div>
          <div class="text-two">hr.subhub@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
      <form method="post">
        <div class="form-group">
          <textarea placeholder="Type your message..." name="message" class="form-control"></textarea>
      </div>
        <div class="button">
          <input type="submit" name="send" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
<?php
mysqli_close($conn);
?>
</html>

