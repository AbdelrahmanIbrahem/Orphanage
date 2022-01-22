<?php
 include_once("Singletonedataconfig.php");
if ($_POST) {
    if (isset($_POST['donate']) && $_POST['donate'] == "Donate") {
        
       
       $conn = SingleObject::getinstance(); 

        $Dontype= $_POST['Type'];
        //echo $Dontype;
        $sql = "select OptionsID from paymentmethod_options where payment_ID = $Dontype ";
        
        $res = $conn->query($sql);
            session_start();
            $_SESSION['typedon']= $Dontype;
         if ($res->num_rows > 0) {
             echo ' <form method="post" action="EXDonate.php" onsubmit="return validate_form ();">';
            while ($row = mysqli_fetch_array($res)) {
            
                $opthions = "select * from paymentoptions where ID ='" .  $row['OptionsID'] . "'";
                $O = $conn->query($opthions);
                $ary = mysqli_fetch_array($O);
                $name=$ary["name"];
                $type=$ary["type"];
                $id= $ary["ID"];
                
                echo
                        ' <input name='.$id.' class="input" type='.$type.' placeholder= '.$name.' required /><br>'
                        ;
                //echo $ary['name'] ;
            }
            echo ' <button type="submit" id="Donatbutton" name="donate" value="Donate"> submit </button> <br><br>'
            . '</form>';
         }
       

    }
} 
