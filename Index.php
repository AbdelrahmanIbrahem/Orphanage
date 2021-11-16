<?php

//include 'login.php';
include '../Model/Context.php';
include_once '../Model/loginadmin.php';
include_once '../Model/logindonator.php';
include_once '../Model/loginmanager.php';
include_once '../Model/loginemployee.php';
include_once("../Model/Singletonedataconfig.php");
 $x=5;
 


if ($_POST)
{
    if (isset($_POST['login']) && $_POST['login'] == "login")
    {

        $userid = $_POST['userid'];
        $password = $_POST['password'];      
        //include_once 'databaseConfig.php';
        //global $link;
        $conn = SingleObject::getinstance();   
        $sql = "select * from users where user='" . $userid . "' and password='" . $password. "'";
        //$r="select usertype from users where user='" . $userid . "'" ;
        global $globuser;
        //$rr= mysqli_query($conn, $r);
        $res;
        $res = $conn->query($sql);
        while ($row = mysqli_fetch_array($res))
        {
            
            
            $globuser= $row[3];
             if($globuser == 1)
           {
           $context = new Context(new loginadmin()); 
           }
           elseif ($globuser==2) {
           $context = new Context(new loginmanager()); 
           }
           elseif ($globuser==3) {
           $context = new Context(new logindonator()); 
           }
           elseif ($globuser==4) {
           $context = new Context(new loginemployee()); 
           }
            
        }
             
        
        if ($res->num_rows > 0) {

             
            echo'<script>alert("WELCOME")</script>';   
           
           $red= $context->executeStrategy($x);
           echo ($red ."<br>");
            
         }
        else {
            echo'<script>alert("error: user not found")</script>';
            echo '<script>location.href="login.html";</script>';
        }
       // $s= SingleObject::getinstance();
        //$s= ShowMessage();
    }
}









class Index {
    
  
}
