
<?php

if ($_POST) {
    if (isset($_POST['orphan']) && $_POST['orphan'] == "orphan") {
        
         $Fname = $_POST['FName'];
         $Lname = $_POST['LName'];
         $Gender = $_POST['Type'];
         $DOB = $_POST['DOB'];
         $Place=$_POST['Place'];
          include_once '../Model/CreatedOrphan.php';
          $do= new CreatedOrphan($Fname, $Lname, $DOB, $Gender, $PLace);          
          $do->insertOrph();
    }
    
    }