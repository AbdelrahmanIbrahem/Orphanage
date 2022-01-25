<?php
include_once('Iadopt.php');
include_once('Ichildstate.php');
include_once('Doctor.php');
include_once('Nurse.php');
include_once('adapter.php');
class reciptionist implements Iadopt {
    public IChildState $childstate;
    function __construct($healer)
    {
        if(strtoupper($healer)=="DOCTOR"){
            $this->childstate= new Doctor();
        }
        elseif(strtoupper($healer)=="NURSE")
        {
            $this->childstate= new Nurse();
        }
        else{
            return null;
        }       
    }
    public function choose($childid,$healer,$statecase,$medicine)
    {
        if(strtoupper($healer)=="DOCTOR"){
            $this->childstate->Diagnose($statecase);
            $this->childstate->givemedicine($medicine);
            return $statecase."is the child statecase from the doctor ". $medicine." is the child medicine";

        }elseif(strtoupper($healer)=="NURSE"){
            $this->childstate->Diagnose($statecase);
            $this->childstate->givemedicine($medicine);
            return $statecase."is the child statecase from the Nurse ". $medicine." is the child medicine";
        }
    }
}
?>