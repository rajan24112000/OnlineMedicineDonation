<?php
	require("../dbconfig/config.php");

	$query = "select * from ngologin";
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
                <a href="getmedicines.php">Medicine</a>
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
                <a href="getmedicines.php">Medicines</a>
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
				<th colspan="8"><h2>NGO Record</h2></th>
			</tr>
			<t style="text-align: center;">
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>NGO Name</th>
				<th>Contact No.</th>
				<th>City</th>
				<th>Actions</th>
			</t>
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
			?>	
				<tr style="text-align: center;">
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['username']; ?></td>
					<td><?php echo $rows['password']; ?></td>
					<td><?php echo $rows['ngo_name']; ?></td>
					<td><?php echo $rows['contact_no']; ?></td>
					<td><?php echo $rows['city']; ?></td>
					<td style="font-weight: bold; background-color: red; text-align: center;"><?php
	               	echo "<a href='ngo_delete.php?id=". $rows['id'] ."' title='Delete Record' data-toggle='tooltip'><span>Delete</span></a>";
					?>	
					</td>
				</tr>
			<?php	
				}
			?>
		</table>
        <a href="addngo.php"><button type="submit" class="addngo-btn">Add NGO</button></a>
        <form method="post" action="export.php">
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
                        <a href="getmedicines.php">Medicines</a>
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