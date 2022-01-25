
<?php

if ($_POST) {
    if (isset($_POST['donate']) && $_POST['donate'] == "donate") {
        
         $Type = $_POST['Type'];
         $Qtt= $_POST['quantity'];
          
          include_once("../Model/roomreqfactory.php");
      $shapeFactory = new roomreqfactory();
      
      $shape = $shapeFactory->getroomreq($Type);
      if($shape!=null)
      {
      echo $Qtt . $shape->add();
      }
    
    }
    
    }
   