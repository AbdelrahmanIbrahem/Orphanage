<?php
include_once('Iadopt.php');
include_once('reciptionist.php');
include_once('Doctor.php');
include_once('Nurse.php');
include_once('Ichildstate.php');
class Adopter implements Iadopt {
    public reciptionist $Reciptionist;

    public function __construct($healer){
        $this->Reciptionist= new reciptionist($healer);

    } 

    public function choose($childid,$healer,$statecase,$medicine)
    {
        if(strtoupper($healer)=="NURSE" || strtoupper($healer)=="DOCTOR" ){
            $this->Reciptionist->choose($childid,$healer,$statecase,$medicine);
            return $childid."taken with responsibility of".$healer."child statecase is".$statecase."child medicine is".$medicine;
        }else{
            return "taken with my own responsibility".$statecase."is the child statecase".$medicine."is child medicine";
        }
    }
}
?>