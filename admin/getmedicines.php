<?php

?>
<?php
	require("../dbconfig/config.php");

	$query = "select * from donatetable";
	$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>

	<title>Home</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    
	
</head>
<body>
	<div id="slideout-menu">
        <ul>
            <li>
                <a href="adminhomepage.php">Home</a>
            </li>
            <li>
                <a href="userdetail.php">Donors</a>
            </li>
            <li>
                <a href="ngodetail.php">NGO's</a>
            </li>
            <li>
                <a href="admin.php">Logout</a>
            </li>
        </ul>
    </div>
        <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/logo.jpg" alt="MedicineDonation">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="adminhomepage.php">Home</a>
            </li>
            <li>
                <a href="userdetail.php">Donors</a>
            </li>
            <li>
                <a href="ngodetail.php">NGO's</a>
            </li>
            <li>
                <a href="admin.php">Logout</a>
            </li>
        </ul>
    </nav>
	<div id="banner">
		<div id="main-wrapper">
        </div>		
		<table  class="inner-container" align="center" border="1px;" style="width: 95%;line-height: 35px; background-color: #adc7dc;">
			<tr>
				<th colspan="13"><h2>Donated Medicine Record</h2></th>
			</tr>
			<t style="text-align: center;">
				<th>ID</th>
				<th>Fname</th>
                <th>Mname</th>
				<th>Lname</th>
				<th>Email-id</th>
				<th>Contact no.</th>
				<th>State</th>
				<th>City</th>
				<th>Medicine Name</th>
				<th>No. of units</th>
				<th>MFG. date</th>
				<th>Expiry date</th>
				<th>Image</th>
			</t>
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
			?>	
				<tr style="text-align: center;">
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['fname']; ?></td>
                    <td><?php echo $rows['mname']; ?></td>
					<td><?php echo $rows['lname']; ?></td>
					<td><?php echo $rows['email']; ?></td>
					<td><?php echo $rows['contactno']; ?></td>
					<td><?php echo $rows['state']; ?></td>
					<td><?php echo $rows['city']; ?></td>
					<td><?php echo $rows['medname']; ?></td>
					<td><?php echo $rows['units']; ?></td>
					<td><?php echo $rows['mfgdate']; ?></td>
					<td><?php echo $rows['expdate']; ?></td>
					<td><?php echo $rows['imglink']; ?></td>					
				</tr>
			<?php	
				}
			?>
		</table>
        <form method="post" action="export1.php">
            <button type="submit" name="export" class="export-btn">Export</button>
        </form>

	</div>
	<footer>
		<div id="left-footer">
			<h3>Quick Links</h3>
            <p>
				<ul>
                    <li>
                        <a href="adminhomepage.php">Home</a>
                    </li>
                    <li>
                       	<a href="userdetail.php">Users</a>
                    </li>
                    <li>
                		<a href="ngodetail.php">NGO's</a>
            		</li>
                    <li>
                        <a href="admin.php">Logout</a>
                    </li>
                </ul>
            </p>
        </div>
        <div id="right-footer">
            <h3>Follow us on</h3>
				<div id="social-media-footer">
					<ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This website is developed by Medicine Donation team.</p>
        </div>
    </footer>
</body>
</html>	
</body>
</html>