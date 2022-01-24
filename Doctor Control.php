<?php
// Doctor Control 
    include ' ../Model/CRUDUser.php';
   
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $Orphan_ID = trim($_POST["orid"]);
        $Orphan_Name = trim($_POST["onid"]);
        $Orphan_syndrome = trim($_POST["orsid"]);
        $tr= new CRUDUser();
        $tr->Read($id,$Orphan_ID,$Orphan_Name,$Orphan_syndrome);
       
    }
   
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $Orphan_diagnoses = trim($_POST["ordid"]);
        $tr= new CRUDUser();
        $tr->Update($id,$Orphan_diagnoses);
       
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $breakfast = trim($_POST["brid"]);
        $lunch = trim($_POST["luid"]);
        $Diagnose = trim($_POST["drid"]);
        $snacks = trim($_POST["snid"]);
        $food = trim($_POST["deid"]);
        $tr= new CRUDUser();
        $tr->Read($id,$breakfast,$lunch,$dinner,$snacks,$food);
       
    }
?>