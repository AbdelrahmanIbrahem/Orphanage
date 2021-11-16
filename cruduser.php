<?php

    include ' ../Model/CRUDUser.php';
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDUser();
        $tr->delete($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDUser();
        $tr->Read($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $username = trim($_POST["registerUsername"]);
        $password = trim($_POST["registerPassword"]);
        $type = trim($_POST["user type"]);
        $tr= new CRUDUser();
        $tr->create($name,$username,$password,$type);
        
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDUser();
        $tr->Update($id);
       
    }

  

?>