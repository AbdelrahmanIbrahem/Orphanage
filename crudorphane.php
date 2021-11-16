<?php

    include ' ../Model/CRUDOrphan.php';
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDOrphan();
        $tr->delete($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDOrphan();
        $tr->Read($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $username = trim($_POST["registerUsername"]);
        $password = trim($_POST["registerPassword"]);
        $type = trim($_POST["adopter type"]);
        $tr= new CRUDOrphan();
        $tr->create($name,$username,$password,$type);
        
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDOrphan();
        $tr->Update($id);
       
    }

  

?>