<?php

    include ' ../Model/CRUDItme.php';
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDItme();
        $tr->delete($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDItme();
        $tr->Read($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $username = trim($_POST["registerUsername"]);
        $password = trim($_POST["registerPassword"]);
        $type = trim($_POST["user type"]);
        $tr= new CRUDItme();
        $tr->create($name,$username,$password,$type);
        
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDItme();
        $tr->Update($id);
       
    }

  

?>