<?php
// orphan control 
<?php

include ' ../Model/CRUDOrphan.php';
if ($_SERVER["project"] == "POST") 
{
    
    $id = trim($_POST["userid"]);
    $Orphan_ID = trim($_POST["orphanid"]);
    $tr= new CRUDOrphan();
    $tr->delete($id,$Orphan_ID,$Nob);
   
}
if ($_SERVER["project"] == "POST") 
{
    
    $id = trim($_POST["userid"]);
    
    $Orphan_ID = trim($_POST["orphanid"]);
    $tr= new CRUDOrphan();
    $tr->Read($id, $Orphan_ID);
   
}
if ($_SERVER["project"] == "POST") 
{
    $id = trim($_POST["userid"]);
    $Orphan_ID = trim($_POST["orphanid"]);
    $Orphan_Name = trim($_POST["orphanname"]);
    $Gender = trim($_POST["gender"]);
    $DOB = trim($_POST["DOB"]);
    $pob = trim($_POST["placeofbirth"]);
    $Nob = trim($_POST["numberofbrothers"]);
    $Dor = trim($_POST["dateofregistration"]);
    $tr= new CRUDOrphan();
    $tr->create($id,$Orphan_ID,$Nob,$pob,$DOB,$Gender,$Orphan_Name,$Dor);
    
}

if ($_SERVER["project"] == "POST") 
{
    
    $id = trim($_POST["userid"]);
    $Orphan_ID = trim($_POST["orphanid"]);
    $Orphan_Name = trim($_POST["orphanname"]);
    $Gender = trim($_POST["gender"]);
    $DOB = trim($_POST["DOB"]);
    $pob = trim($_POST["placeofbirth"]);
    $Nob = trim($_POST["numberofbrothers"]);
    $Dor = trim($_POST["dateofregistration"]);
    $tr= new CRUDOrphan();
    $tr->Update($id,$Orphan_ID,$Nob,$pob,$DOB,$Gender,$Orphan_Name,$Dor);
   
}
?>