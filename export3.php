<?php
            session_start();
            require("dbconfig/config.php");
            $user = $_SESSION['username'];
            $output = ' ';
            if(isset($_POST["export"]))
            {
                $query = "select * from donatetable where ngo_name = '$user'";
                $result = mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    $output .= '
                    <table class="table" bordered="1">  
                        <tr>  
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
                        </tr>
                    ';
                    while($row = mysqli_fetch_array($result))
                    {
                        $output .= '
                            <tr>  
                                <td>'.$row["id"].'</td>  
                                <td>'.$row['fname'].'</td>
                                <td>'.$row['mname'].'</td>
                                <td>'.$row['lname'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['contactno'].'</td>
                                <td>'.$row['flatno'].'</td>
                                <td>'.$row['street'].'</td>
                                <td>'.$row['area'].'</td>
                                <td>'.$row['pincode'].'</td>
                                <td>'.$row['state'].'</td>
                                <td>'.$row['city'].'</td>
                                <td>'.$row['medname'].'</td>
                                <td>'.$row['units'].'</td>
                                <td>'.$row['mfgdate'].'</td>
                                <td>'.$row['expdate'].'</td>
                                <td>'.$row['imglink'].'</td>
                            </tr>
                        ';
                    }
                    $output .= '</table>';
                    header('Content-Type: application/xls');
                    header('Content-Disposition: attachment; filename=download_viewmedicine_report.xls');
                    echo $output;
                }

            }
?>