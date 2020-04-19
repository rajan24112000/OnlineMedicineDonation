<?php
            require("../dbconfig/config.php");
            $output = ' ';
            if(isset($_POST["export"]))
            {
                $query = "SELECT * FROM logintable";
                $result = mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    $output .= '
                    <table class="table" bordered="1">  
                        <tr>  
                            <th>ID</th>
                            <th>Fname</th>
                            <th>Lname</th>
                            <th>Email-id</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    ';
                    while($row = mysqli_fetch_array($result))
                    {
                        $output .= '
                            <tr>  
                                <td>'.$row["id"].'</td>  
                                <td>'.$row['firstname'].'</td>
                                <td>'.$row['lastname'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row["username"].'</td>  
                                <td>'.$row["password"].'</td>
                            </tr>
                        ';
                    }
                    $output .= '</table>';
                    header('Content-Type: application/xls');
                    header('Content-Disposition: attachment; filename=download_userdetail_medicine.xls');
                    echo $output;
                }

            }
?>