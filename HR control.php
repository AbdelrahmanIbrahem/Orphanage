<?php
//HR control 
    include ' ../Model/CRUDOrphan.php';
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $Applicant_ID= trim($_POST["aid"]);
        $tr= new  CRUDUser();
        $tr->delete($id,$Applicant_ID);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $Applicant_ID= trim($_POST["aid"]);
        $tr= new  CRUDUser();
        $tr->Read($id,$Applicant_ID);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $Applicant_ID= trim($_POST["aid"]);
        $Applicant_name = trim($_POST["anid"]);
        $POB = trim($_POST["pbid"]);
        $Home_address = trim($_POST["haid"]);
        $Applicant_ID_Acc = trim($_POST["aaaid"]);
        $Applicant_ID_del = trim($_POST["adid"]);
        $Applicant_ID_sea = trim($_POST["asid"]);
        $gender = trim($_POST["Gender"]);
        $tr= new  CRUDUser();
        $tr->create($id,$Applicant_ID,$Applicant_name,  $POB , $Home_address, $Applicant_ID_Acc,$Applicant_ID_del,$Applicant_ID_sea);
        
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        
        $Applicant_ID= trim($_POST["aid"]);
        $Applicant_name = trim($_POST["anid"]);
        $POB = trim($_POST["pbid"]);
        $Home_address = trim($_POST["haid"]);
        $Applicant_ID_Acc = trim($_POST["aaaid"]);
        $Applicant_ID_del = trim($_POST["adid"]);
        $Applicant_ID_sea = trim($_POST["asid"]);
        $gender = trim($_POST["Gender"]);
        $tr= new  CRUDUser();
        $tr->Update($id,$Applicant_ID,$Applicant_name,  $POB , $Home_address, $Applicant_ID_Acc,$Applicant_ID_del,$Applicant_ID_sea);
       
    }
   
?>