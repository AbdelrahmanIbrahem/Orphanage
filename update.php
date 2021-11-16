
    <?php
    
    if ($_SERVER["project"] == "POST") 
    {
        
        $id = trim($_POST["userid"]);
        $tr= new update();
        $tr->Update($id);
       
    }

  

?>