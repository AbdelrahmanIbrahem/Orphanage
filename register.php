<?php

if ($_POST) {
    if (isset($_POST['register']) && $_POST['register'] == "Register") {
        
       
      
        $userid = $_POST['registerUsername'];
        $password = $_POST['registerPassword'];
        $usertype= $_POST['usertype'];
        $mail = $_POST['registerEMail'];
        include_once("Singletonedataconfig.php");
        
        $conn = SingleObject::getinstance(); 
       

        $sql = "INSERT INTO `users` (`user`, `password`, `usertype` , `e-mail`)"." VALUES ('" . $userid . "' , '" . $password . "' , '" . $usertype . "', '" . $mail . "')";
        
        

             $res = $conn->query($sql);
        
         if ($res->num_rows == 0) {
            echo'<script>alert("SUCCEEDED")</script>';
            echo '<script>location.href="../login.html";</script>';
         }
       

    }
} 
