<?php

if ($_POST) {
    if (isset($_POST['register']) && $_POST['register'] == "Register") {
        
       
      
        $userid = $_POST['registerUsername'];
        $password = $_POST['registerPassword'];
         $hash= password_hash($password,PASSWORD_BCRYPT);


        $usertype= $_POST['usertype'];
        $mail = $_POST['registerEMail'];
        include_once("Singletonedataconfig.php");
        
        $conn = SingleObject::getinstance(); 
       

        $sql = "INSERT INTO `users` (`user`, `password`, `usertype` , `e-mail`)"." VALUES ('" . $userid . "' , '" . $hash . "' , '" . $usertype . "', '" . $mail . "')";
        
        

             $res = $conn->query($sql);
        
         if ($res->num_rows == 0) {

            $sql = "SELECT ErrorTemplate FROM errors WHERE ID =6";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
           {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    $error=$row["ErrorTemplate"];
                    echo "<script>alert('$error');</script>";
                }
                echo '<script>location.href="../starter.php";</script>';
           }
         }
       

    }
} 
