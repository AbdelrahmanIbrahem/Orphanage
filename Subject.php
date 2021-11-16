<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Subject
 *
 * @author LENOVO
 */
abstract class Subject {
    //put your code here
    abstract public function invite(Observer $observer);
    abstract public function cancelinvitation(Observer $observer);
    abstract public function Notify();
  
    

}
