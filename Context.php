<?php

include 'ILogin.php';

class Context {
   
    private ILogin $usertype ;
    
    
    public function __construct( $usertype ){
        $this->ILogin= $usertype;

    }
 
    public function executeStrategy($x){
        return $this->ILogin->Login($x);
    }
    
}
