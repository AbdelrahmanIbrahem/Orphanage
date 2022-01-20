<?php

include_once("Model/Singletonedataconfig.php");

       
        $conn = SingleObject::getinstance(); 
 
     
        $sq= "select Word from word where ID=2 ";            
        $r = $conn->query($sq);
        $arab= mysqli_fetch_array($r);
        //echo $arab[0] ;
        header('Content-Type: application/json');
        echo json_encode($arab[0]);
       
  
    




