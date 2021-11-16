<?php
include 'Subject.php';
include 'Invitedpeople.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Event
 *
 * @author LENOVO
 */
class Event extends Subject {
     private $name;
     private $availability;
     private $observers = array();
    public function __construct($name) {
        $this->name= $name;
        
    }

    public function Notify() {
        foreach($this->observers as $obs) {
        $obs->Update($this->availability);
      }
    }

    public function cancelinvitation(\Observer $observer) {
         foreach($this->observers as $okey => $oval) {
        if ($oval == $observer) { 
          unset($this->observers[$okey]);
        }
      }
    }

    public function invite(\Observer $observer) {
        $this->observers[] = $observer;
    }
    public function setAvailability(bool $available)
    {
        $this->availability=$this->name + ($available == 'Available' | 'Not Available'); 
        $this->Notify();
    }

      
}







$Ahmed= new Invitedpeople($name='Ahmed');
$Ali= new Invitedpeople($name='Ali');
$Mohamed= new Invitedpeople($name='Mohamed');
$Khaled= new Invitedpeople($name='Khaled');

$pattern= new Event($name);

$pattern->invite($Ahmed);
$pattern->invite($Ali);
$pattern->invite($Mohamed);
$pattern->invite($Khaled);

$pattern->setAvailability(true);
