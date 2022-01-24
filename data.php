<?php
    $link = mysqli_connect("localhost", "root", "", "login_demo");

    if($link->connect_error){
        die ("Connection Failed".$link->connect_error);
    }
    $sql="SELECT * FROM customizedreport WHERE ID=1";

    if($res = $link->query($sql)){
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){

                $query = $row['SQLStatement']; 
                $result = $link->query($query); 
                if($result->num_rows > 0){
            ?>
                    <table cellpadding="10">
                        <tr>
                            <th>User ID</th>
                            <th>Registration Date</th>
                        </tr>
            <?php
                    while($rows = $result->fetch_assoc()){
            ?>          
                        <tr>
                            <td><?php echo $rows['user'];?></td>
                            <td><?php echo $rows['created_at'];?></td>
                        </tr>
            <?php
                    }
            ?>
                    </table>
        <?php
                }
            }
        }   
    }
    else
    {
        echo $link->error;
    }
?>