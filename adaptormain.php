<?php


include_once('../Model/adapter.php');

    
if ($_POST) {
    if (isset($_POST['childstate']) && $_POST['childstate'] == "childstate") {
        $healer=$_POST['Type'];
        $KID=$_POST['ID'];
        $Adapt = new Adopter($healer);
 
      
       print($Adapt->choose($KID, $healer,"aids","hiv"));
    }
}
?>
 