<?php
	require("../dbconfig/config.php");
	$output = ' ';
	if(isset($_POST["export"]))
	{
		$query = "SELECT * FROM ngologin";
 		$result = mysqli_query($con, $query);
 		if(mysqli_num_rows($result) > 0)
 		{
  			$output .= '
   			<table class="table" bordered="1">  
                <tr>  
                    <th>Id</th>  
					<th>Username</th>  
			        <th>Password</th>  
       				<th>NGO-Name</th>
       				<th>Contact-no</th>
       				<th>City</th>
                </tr>
  			';
  			while($row = mysqli_fetch_array($result))
  			{
   				$output .= '
    				<tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["username"].'</td>  
                         <td>'.$row["password"].'</td>  
       					<td>'.$row["ngo_name"].'</td>  
       					<td>'.$row["contact_no"].'</td>
       					<td>'.$row["city"].'</th>
                    </tr>
   				';
  			}
  			$output .= '</table>';
  			header('Content-Type: application/xls');
  			header('Content-Disposition: attachment; filename=download.xls');
  			echo $output;
 		}

	}
?>
