<?php
    class SingleObject{
    
  
    private function __construct()
    {}
        
        public static function getinstance()
       {
          $i=0;
           
            if ($i==0)
            {
            
            $instance = new SingleObject();
            $i+=1;
            }
        define('SERVER', 'localhost');
        define('USERNAME', 'root');
        define('PASSWORD', '');
        define('NAME', 'login_demo');

 
          /* Attempt to connect to MySQL database */
          $instance = mysqli_connect(SERVER, USERNAME, PASSWORD, NAME);
 
          // Check connection
          if($instance === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
          }
        
        
        return $instance;    
       } 

 
    public function ShowMessage()
    {
        echo"database accessed done";
        
    }
}
?>


