<?php 
    session_start();
	require("dbconfig/config.php");
    $user = $_SESSION['username'];
	$query = "select * from donatetable where ngo_name = '$user'";
	$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view_medicine.css">
</head>

<body>
    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="img/logo.jpg" alt="MedicineDonation">
            </a>
			<h5>Welcome <?php echo $_SESSION['username'] ?></h5>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="ngo_homepage.php">Home</a>
            </li>
            <li>
                <a href="view_medicine.php">Donated Medicine</a>
            </li>
			<form method="post">
                <button name="logout" class="log-btn">Logout</button>
            </form>
        </ul>
        <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header('location:ngo.php');
            }
        ?>
    </nav>
    <div id="banner">
            <table  class="inner-container" border="1px;" style="width: 95%;line-height: 25px; background-color: #adc7dc; border-radius: 10px; margin-bottom: 20%; margin-top: 5%; margin-left: 2%;">
			<tr>
				<th colspan="18"><h2>Donated Medicine Record</h2></th>
			</tr>
			<t style="text-align: center;">
				<th>ID</th>
				<th>Fname</th>
                <th>Mname</th>
				<th>Lname</th>
				<th>Email-id</th>
				<th>Contact no.</th>
				<th>Flat/Room no.</th>
				<th>Street/Lane</th>
				<th>Area/Locality</th>
				<th>Pincode</th>
				<th>State</th>
				<th>City</th>
				<th>Medicine Name</th>
				<th>No. of units</th>
				<th>MFG. date</th>
				<th>Expiry date</th>
				<th>Image</th>
				<th>Action</th>
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
					<td><?php echo $rows['flatno']; ?></td>
					<td><?php echo $rows['street']; ?></td>
					<td><?php echo $rows['area']; ?></td>
					<td><?php echo $rows['pincode']; ?></td>
					<td><?php echo $rows['state']; ?></td>
					<td><?php echo $rows['city']; ?></td>
					<td><?php echo $rows['medname']; ?></td>
					<td><?php echo $rows['units']; ?></td>
					<td><?php echo $rows['mfgdate']; ?></td>
					<td><?php echo $rows['expdate']; ?></td>
					<td><?php echo $rows['imglink']; ?></td>
					<td style="font-weight: bold; background-color: red; text-align: center;"><?php
	               	echo "<a href='delete.php?id=". $rows['id'] ."' title='Delete Record' data-toggle='tooltip'><span>Delete</span></a>";
					?>	
					</td>
				</tr>
			<?php	
				}
			?>
		</table>
        <form method="post" action="export3.php">
            <button type="submit" name="export" class="export-btn">Export</button>
        </form>

    </div>
    <main>
        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                    <ul>
                        <li>
                            <a href="index_homepage.php">Home</a>
                        </li>
                        <form method="post">
                            <button name="logout" class="log-btn">Logout</button>
                        </form>
                    </ul>
                    <?php
                        if(isset($_POST['logout']))
                        {
                            session_destroy();
                            header('location:login.php');
                        }
                    ?>
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
    </main>
	
		
</body>

</html>