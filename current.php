<html>
<?php
session_start();
$conn= mysqli_connect('localhost','root','123456789','user_profile');
?>
<head><title> Current Services </title></head>
<body>
<div class="container bootstrap snippets bootdey">
    <div class="table-responsive">
		<link href="current.css" rel="stylesheet" type="text/css" />
    	<!-- PROJECT TABLE -->
		<h1>CURRENT SUBSCRIPTION</h1>
    	<table class="table colored-header datatable project-list">
    		<thead>
    			<tr>
    				<th>Account</th>
    				<th>Start Date</th>
    				<th>End Date</th>
    				<th>Plan</th>
    				<th>Status</th>
					<th></th>
    			</tr>
				<?php
					if(session_status()==2 && isset($_SESSION['user'])){
						$email=$_SESSION['user']['email'];
						$q= "select * from subscription where email='$email'";
						$run=mysqli_query($conn,$q);
						while($details=mysqli_fetch_row($run)){
							if($details[8]=='Expired'){
								echo "<tr><td><a href=''>".$details[4]."</a></td><td>".date_format(date_create($details[3]), 'd/m/Y')."</td><td>".date_format(date_create($details[5]), 'd/m/Y')."</td><td>".$details[7]."</td><td>".$details[8]."</td><td><a href=''><input type='button' value='Renew'></a></td></tr>";
							}
							else{
								echo "<tr><td><a href=''>".$details[4]."</a></td><td>".date_format(date_create($details[3]), 'd/m/Y')."</td><td>".date_format(date_create($details[5]), 'd/m/Y')."</td><td>".$details[7]."</td><td>".$details[8]."</td><td><input type='button' name='cancel' value='Cancel'></td></tr>";
							}
						}
					}
					else{
						echo "<script language='javascript'>alert('please sign in to know your Running services')</script>";
					}
				?>
    		</thead>
    		<tbody>
    			
    		</tbody>
    	</table>
    	<!-- END PROJECT TABLE -->
    </div>
</div>
</body>
<?php
mysqli_close($conn);
?>
</html>