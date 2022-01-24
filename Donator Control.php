<?php
// donator control 
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
        $Donator_ID = trim($_POST["donatorid"]);
        $tr= new  CRUDUser();
        $tr->Read($id,$Adopter_ID);
       
    }
    if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $Donator_ID = trim($_POST["donatorid"]);
        $Donator_Name = trim($_POST["donatorname"]);
        $gender = trim($_POST["Gender"]);
        $place_of_birth = trim($_POST["placeofbirth"]);
        $Home_address = trim($_POST["homeaddress"]);
        $Donator_Job = trim($_POST["donatorjob"]);
        $Donator_Number = trim($_POST["donatornumber"]);
         $payment = trim($_POST["payment"]);
        $tr= new  CRUDUser();
        $tr->create($id,$Adopter_ID,$Adopter_Name,$Wife_Name,$gender,$place_of_birth,$Home_address,$Adopter_Job,$Phone_Number,$Family_members_number,$payment);
        
    }

    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $Donator_ID = trim($_POST["donatorid"]);
        $Donator_Name = trim($_POST["donatorname"]);
        $gender = trim($_POST["Gender"]);
        $place_of_birth = trim($_POST["placeofbirth"]);
        $Home_address = trim($_POST["homeaddress"]);
        $Donator_Job = trim($_POST["donatorjob"]);
        $Donator_Number = trim($_POST["donatornumber"]);
         $payment = trim($_POST["payment"]);
        $tr= new  CRUDUser();
        $tr->Update($id,$Adopter_ID,$Adopter_Name,$Wife_Name,$gender,$place_of_birth,$Home_address,$Adopter_Job,$Phone_Number,$Family_members_number,$payment);
       
    }
   
?>