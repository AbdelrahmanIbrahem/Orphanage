<?php
//Applicant control 
if ($_SERVER["project"] == "POST") 
    {
        $id = trim($_POST["userid"]);
        $AppName = trim($_POST["Personal"]);
        $WorkEXP = trim($_POST["Work"]);
        $keyskills =trim ($_POST['Key']);
        $Educationstat =trim ($_POST['Education']);
        $tr= new registar();
        $tr->create($id,$AppName,$WorkEXP,$keyskills,$Educationstat);
    }

?>
