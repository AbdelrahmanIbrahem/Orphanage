<?php
// Nurse control 
    include ' ../Model/CRUDUser.php';
   
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $Orphan_ID = trim($_POST["oid"]);
        $tr= new CRUDUser();
        $tr->Read($id,$Orphan_ID);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $breakfast = trim($_POST["bid"]);
        $lunch = trim($_POST["lid"]);
        $Diagnose = trim($_POST["did"]);
        $snacks = trim($_POST["sid"]);
        $food = trim($_POST["feid"]);
        $tr= new CRUDUser();
        $tr->Update($id,$breakfast,$lunch,$dinner,$snacks,$food);
       
    }
?>