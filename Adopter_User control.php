<?php
// Adopter_User control 
    include ' ../Model/CRUDOrphan.php';
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new  CRUDUser();
        $tr->delete($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new  CRUDUser();
        $tr->Read($id);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $radio1= trim($_POST["less5"]);
        $radio2 = trim($_POST["less10"]);
        $radio3 = trim($_POST["less18"]);
        $gender = trim($_POST["Gender"]);
        $tr= new  CRUDUser();
        $tr->create($id,$radio1,$radio2,$radio3,$gender);
        
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $radio1= trim($_POST["less5"]);
        $radio2 = trim($_POST["less10"]);
        $radio3 = trim($_POST["less18"]);
        $gender = trim($_POST["Gender"]);
        $tr= new  CRUDUser();
        $tr->Update($id,$radio1,$radio2,$radio3,$gender);
       
    }
   
?>