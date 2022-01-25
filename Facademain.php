<?php
if ($_POST) {
    if (isset($_POST['donate']) && $_POST['donate'] == "donate") {
        
include_once('checkmaker.php');

       $shapeMaker = new checkmaker();

     $b= $shapeMaker->educhecking();
     echo $b;
     $x= $shapeMaker->Checkhealth();
     echo $x ;
     $z= $shapeMaker->Checkhobbies();	
     echo $z;
    }
}
?>      	
   
