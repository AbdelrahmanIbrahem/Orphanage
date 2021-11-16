<?php

if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $username = trim($_POST["registerUsername"]);
        $password = trim($_POST["registerPassword"]);
        $mail = $_POST['registerEMail'];
        $tr= new registar();
        $tr->create($name,$username,$password,$mail);
        
    }

?>