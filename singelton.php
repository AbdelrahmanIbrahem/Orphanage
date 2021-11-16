<?php

if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $username = trim($_POST["Username"]);
        $password = trim($_POST["Password"]);
      
        $tr= new singelton();
        $tr->read($name,$username,$password);
        
    }
?>