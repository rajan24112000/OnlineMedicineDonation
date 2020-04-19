<?php
            require("../dbconfig/config.php");
            $output = ' ';
            if(isset($_POST["export"]))
            {
                $query = "SELECT * FROM donatetable";
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
                    header('Content-Disposition: attachment; filename=download_medicine_report.xls');
                    echo $output;
                }

            }
?>