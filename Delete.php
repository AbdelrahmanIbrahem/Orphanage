<?php
include ' ../Model/CRUDItme.php';
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new CRUDItme();
        $tr->delete($id);
       
    }
    
?>