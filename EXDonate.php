<?php

 include_once("Singletonedataconfig.php");
if ($_POST) {
    if (isset($_POST['donate']) && $_POST['donate'] == "Donate") {
        
       
       $conn = SingleObject::getinstance(); 
       
       session_start();
       $Donatype=$_SESSION['typedon'];
       $sql = "select * from paymentmethod_options where payment_ID = $Donatype ";
       $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            while ($row = mysqli_fetch_array($res)) {
                
                $value = $_POST[$row['OptionsID']];
                //echo $value;
                $insert = "INSERT INTO `paymentoptiionvalue` (`Payment-method_Option_ID`, `Value`)"." VALUES ('" . $row['ID'] . "' , '" . $value . "')";
                $excuute=$conn->query($insert);
        
                
           
            }
            
            }
       /*$x= $x +5 ;
       echo $x;*/
    }
}

