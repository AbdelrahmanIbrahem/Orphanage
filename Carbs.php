<?php



class Carbs extends AddOns{
 Public Food $food;
 public function __construct(Food $food) {
           $this->food=$food;
    }
 
    public function HealthBenefit() {
                return $food.$this->HealthBenefit()+" and"+  $this->NumberofCkal() +"   They help fuel your brain, kidneys, heart muscles, and central nervous system" ;

    }
    
    
    

}
