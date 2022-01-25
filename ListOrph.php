<?php


include_once('../Model/ListOrphans.php');
if ($_POST) {
    if (isset($_POST['ORPH']) && $_POST['ORPH'] == "ORPH") {
        
         $agelimit = $_POST['less'];
         $gender= $_POST['gender'];
         $insert= new ListOrphans ($agelimit, $gender);
         $insert->listorph();
         
    }
}

