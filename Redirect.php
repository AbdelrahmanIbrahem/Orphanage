 <?php

include_once("../Model/Singletonedataconfig.php");

 if ($_POST)
{
    if (isset($_POST['login']) && $_POST['login'] == "login")
    {
        //echo 'hi';
        $conn = SingleObject::getinstance();   
        $userid = $_POST['userid'];
        $password = $_POST['password'];  
        $sql = "select * from users where user='" . $userid . "' ";
        
        //$rr= mysqli_query($conn, $r);
        $res;
        $res = $conn->query($sql);
        
        $row = mysqli_fetch_array($res);
        $usertype=$row['usertype'];
             
      
        if ($res->num_rows > 0) {
            
             if (password_verify($password, $row ['password'])) 
             {
                //echo'<script>alert("WELCOME")</script>';  
                //echo ($globuser);
                //echo("hello");
                $sq= "select LINKID from user_links where UID='" .  $usertype . "'";  
                $links=$conn->query($sq);
                
                $i=0;
                   $htmls;
                   session_start();
                   while ($row = mysqli_fetch_array($links)) {
                    //$link_arrays=mysqli_fetch_array($links);
                    echo $row['LINKID'] ;
                    $LINKK=  "select * from links where ID='" .  $row['LINKID'] . "'"; 
                    
                    $linkKs=$conn->query($LINKK);
                    $t=mysqli_fetch_array($linkKs);
                    $htmls[$i] = $t ;
                    $h=$t['HTML'];
                    
                    $_SESSION[$t['LINK']]=$t['HTML'];
                    echo "<td><a href='$t[URL]'> $t[LINK] </a></td> <br>"; 
                       
                   // $htmls= array_push($t['HTML'], $i);
                    $i++;
                    }  
                    //$htmls[0][3];                     
              }             
                   
        }
        else {
            echo'<script>alert("error: user not found")</script>';
            echo '<script>location.href="../starter.php";</script>';
        }
        mysqli_close($conn);
    }
}








class Redirect {
 private function __construct()
    {}
  
   
    
  
}
