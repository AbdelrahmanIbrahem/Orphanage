<?php

include_once('../Model/checkmaker.php');
if ($_POST) {
    if (isset($_POST['check']) && $_POST['check'] == "check") {
        
         $Type = $_POST['Type'];
         $kidid= $_POST['ID'];
          
          include_once("../Model/roomreqfactory.php");
       $shapeMaker = new checkmaker();
    if($Type==1)
    {
    $x= $shapeMaker->educhecking();
     echo "KID" . $kidid . $x;
    } elseif ($Type==2) {
    $x= $shapeMaker->Checkhealth();
     echo "KID" . $kidid . $x ;
    } elseif ($Type==3) {
    $x= $shapeMaker->Checkhobbies();	
     echo "KID" . $kidid .$x;
    }
   
     
     
}

    }
?>      	
   