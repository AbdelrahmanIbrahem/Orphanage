 <?php

//include 'login.php';
/*include '../Model/Context.php';
include_once '../Model/loginadmin.php';
include_once '../Model/logindonator.php';
include_once '../Model/loginmanager.php';
include_once '../Model/loginemployee.php';*/
include_once("../Model/Singletonedataconfig.php");

 


if ($_POST)
{
    if (isset($_POST['login']) && $_POST['login'] == "login")
    {
        echo 'hi';
        $conn = SingleObject::getinstance();   
        $userid = $_POST['userid'];
        $password = $_POST['password'];  
//        $hashedPwdInDb=password_hash($password,PASSWORD_DEFAULT);
//        echo $hashedPwdInDb;

        //include_once 'databaseConfig.php';
        //global $link;         
        //and password='" . $password. "'
        $sql = "select * from users where user='" . $userid . "' ";
        
     
      // password_verify($password,$data['password'])

        //$r="select usertype from users where user='" . $userid . "'" ;
        global $globuser;
        //$rr= mysqli_query($conn, $r);
        $res;
        $res = $conn->query($sql);
        
        $row = mysqli_fetch_array($res);
        //echo $row[0];
  
       
        //else {
        //echo "Please check your inputs!"; }
       // $globuser= $row[5];
        
//        while (true)
//        {
//            
//            
//            
//             if($globuser == 1)
//           {
//           $context = new Context(new loginadmin()); 
//           }
//           elseif ($globuser==2) {
//           $context = new Context(new loginmanager()); 
//           }
//           elseif ($globuser==3) {
//           $context = new Context(new logindonator()); 
//           }
//           elseif ($globuser==4) {
//           $context = new Context(new loginemployee()); 
//           }
//            
//        }
             
      
        if ($res->num_rows > 0) {

            
            //echo ($globuser);
            echo("hello");
               $sq= "select LINKID from user_links where UID='" .  $globuser . "'";  
               
               $r = $conn->query($sq);
               if ($r->num_rows > 0) {
                echo'<script>alert("got it")</script>'; 
                $ro = mysqli_fetch_array($r);                
                //echo ($ro[0] ."<br>");
                  
                $sqll = "select HTML from links where ID= $ro[0] ";
                $ress = $conn->query($sqll);
                $roow = mysqli_fetch_array($ress);
                $HTML=$roow[0];        
                $s= "select PageCSS from page_layout where PageHTML_ID=  $ro[0] ";
                $rr = $conn->query($s);
                $CSS = mysqli_fetch_array($rr);
                $page=$HTML .$CSS[0];
                //echo ($CSS[0] ."<br>" );
                
                echo ( $page ."<br>");
               }
        if (password_verify($password, $row ['password'])) 
        {
        echo "You have been logged IN!";
        }             
            //echo'<script>alert("WELCOME")</script>';   
           
           //$red= $context->executeStrategy($x);
//           
//            
         }
        else {
            echo'<script>alert("error: user not found")</script>';
            echo '<script>location.href="login.html";</script>';
        }
       
    }
}









class Index {
    
  
}
