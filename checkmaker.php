<?php
include_once('Icheck.php');
include_once('checkhealth.php');
include_once('Educationcheck.php');
include_once('checkhobbies.php');
    class checkmaker{
        private icheck $checkhealth;
        private icheck $checkedu;
        private icheck $checkhobbies;
        function __construct()
        {
            $this->checkhealth= new checkhealth();
            $this->checkedu=new Educationcheck();
            $this->checkhobbies=new checkhobbies();
        }
        function Checkhealth()
        {
            return  $this->checkhealth->checkadoption();
        }
        function educhecking()
        {
            return $this->checkedu->checkadoption();
        }
        function Checkhobbies()
        {
            return $this->checkhobbies->checkadoption();
        }
        
    }
?>