<?php
class ChildPlace{
    private $name = "mostafa";
    private $id = 1;
    function adopted(){
        print("Child [ Name: "+$this->name+", 
           his ID: " + $this->id +" ] adopted");
     }
     function released(){
        print("Child [ Name: "+$this->name+", 
           his ID: " + $this->id +" ] sold");
     }
}