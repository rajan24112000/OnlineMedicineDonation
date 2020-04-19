<?php
	require("../dbconfig/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<div id="banner">
		<div id="main-wrapper">
			<center>
				<h2>Admin Login</h2>
			</center>
			<div class="img-container">
				<img src="../img/adminlogo.png" class="img1" alt="MedicineDonation">
			</div>
			<form action="admin.php" method="post">
				<div class="inner-container">
					<label><b>Username</b></label>
					<input type="text" class="username" name="Username" placeholder="Enter the username" required>
					<br><br>

					<label><b>Password</b></label>
					<input type="Password" class="password" name="password" placeholder="Enter the password" required>
					<br><br>

					<button type="submit" class="login_button" name="login">Login</button>
				</div>
			</form>
			<?php
				if(isset($_POST['login']))
				{
					@$username = $_POST['username'];
					@$password = $_POST['password'];

					$query = "select * from adminlogin WHERE username = '$username' AND password = '$password'";
					//echo $query;
					$query_run = mysqli_query($con,$query);
					//echo mysqli_num_rows($query_run);	
					if($query_run)
					{
						//valid
						//echo '<script type="text/javascript">alert("Welcome ):")</script>';
						header('location: adminhomepage.php');
					}
					else
					{
						echo '<script type="text/javascript>alert("No such user exist. Invalid Credentials")</script>';
					}
				}
				else
				{

				}
			?>
		</div>
	</div>

</body>
</html>