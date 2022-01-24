<?php
// Adopter control 
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
        $Adopter_ID = trim($_POST["adopterid"]);
        $Adopter_Name = trim($_POST["adoptername"]);
        $Wife_Name = trim($_POST["wifename"]);
        $gender = trim($_POST["Gender"]);
        $place_of_birth = trim($_POST["placeofbirth"]);
        $Home_address = trim($_POST["homeaddress"]);
        $Adopter_Job = trim($_POST["adopterjob"]);
        $Phone_Number = trim($_POST["phonenumber"]);
        $Family_members_number= trim($_POST["familynumber "]);
        $tr= new  CRUDUser();
        $tr->Read($id,$Adopter_ID,$Adopter_Name,$Wife_Name,$gender,$place_of_birth,$Home_address,$Adopter_Job,$Phone_Number,$Family_members_number);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $Adopter_ID = trim($_POST["adopterid"]);
        $Adopter_Name = trim($_POST["adoptername"]);
        $Wife_Name = trim($_POST["wifename"]);
        $gender = trim($_POST["Gender"]);
        $place_of_birth = trim($_POST["placeofbirth"]);
        $Home_address = trim($_POST["homeaddress"]);
        $Adopter_Job = trim($_POST["adopterjob"]);
        $Phone_Number = trim($_POST["phonenumber"]);
        $Family_members_number= trim($_POST["familynumber "]);
      
        $tr= new  CRUDUser();
        $tr->create($name,$Adopter_ID,$Adopter_Name,$Wife_Name,$gender,$place_of_birth,$Home_address,$Adopter_Job,$Phone_Number,$Family_members_number);
        
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $Adopter_ID = trim($_POST["adopterid"]);
        $Adopter_Name = trim($_POST["adoptername"]);
        $Wife_Name = trim($_POST["wifename"]);
        $gender = trim($_POST["Gender"]);
        $place_of_birth = trim($_POST["placeofbirth"]);
        $Home_address = trim($_POST["homeaddress"]);
        $Adopter_Job = trim($_POST["adopterjob"]);
        $Phone_Number = trim($_POST["phonenumber"]);
        $Family_members_number= trim($_POST["familynumber "]);
        $tr= new  CRUDUser();
        $tr->Update($id,$Adopter_ID,$Adopter_Name,$Wife_Name,$gender,$place_of_birth,$Home_address,$Adopter_Job,$Phone_Number,$Family_members_number);
       
    }
   
?>