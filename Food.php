<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Food
 *
 * @author mohan
 */
abstract class Food {
    
     var $name;
     var $grams;
     var $ckalpergram;
      public function NumberofCkal() {
        $numberofckal= $this->grams*$this->ckalpergram;
        return $numberofckal;
    }   
     abstract public function HealthBenefit();

     
}
