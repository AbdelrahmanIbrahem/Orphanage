<?php

include_once("Model/Singletonedataconfig.php");


$conn = SingleObject::getinstance();   
   //$sq= "select LINKID from user_links where UID='" .  $globuser . "'";  

    //$r = $conn->query($sq);
    //if ($r->num_rows > 0) {
    //echo'<script>alert("got it")</script>'; 
    //$ro = mysqli_fetch_array($r);                
    //echo ($ro[0] ."<br>");
    
    $sqll = "select HTML from links where ID= 1 ";
    $ress = $conn->query($sqll);
    $roow = mysqli_fetch_array($ress);
    $HTML=$roow[0];       
    $s= "select PageCSS from page_layout where PageHTML_ID=  1 ";
    $rr = $conn->query($s);
    $CSS = mysqli_fetch_array($rr);
    $page=$HTML .$CSS[0];
     //echo $HTML ;

    echo ( $page ."<br>");
//}



class starter {
    
}
 