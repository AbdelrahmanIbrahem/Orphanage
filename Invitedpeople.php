<?php
include 'Observer.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Invitedpeople
 *
 * @author LENOVO
 */
class Invitedpeople implements Observer {
    private  $name;
    public function __construct($name) {
        $this->name= $name;
}

    public function Update($message) {
        
        echo ($this->name + "has new notification"  + $message);
    }

    //put your code here
}
