<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Breackfast
 *
 * @author mohan
 */
class Breackfast extends Food {
    
   function __construct($name,$grams,$ckalpergram) {
    $this->name = $name;  
    $this->grams = $grams;
    $this->ckalpergram = $ckalpergram;

  }
  
    public function HealthBenefit() {
                return NumberofCkal()+" ckals gives the children pwoer to start their day" ;

    }

}
