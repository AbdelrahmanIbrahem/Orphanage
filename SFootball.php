<?php
include_once('IState.php');
class sfootball implements IPlay{
    function football(Context $context){
  
        $context->setState($this);	
        
    }
    function currentstate()
    {
             print("Child is subscribed in football"); 
    }
 
    
}