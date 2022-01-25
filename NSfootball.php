<?php
include_once('IState.php');
class nsfootball implements IPlay{
    function football(Context $context){
      
        $context->setState($this);	

    }
 
     function currentstate()
    {
             print("Child is Not subscribed in football"); 
    }
}