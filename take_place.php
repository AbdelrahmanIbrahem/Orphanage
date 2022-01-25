<?php
include_once("Schild.php");
include_once("ChildPlace.php");
include_once("ChildAdopted.php");
include_once("Childrelease.php");
class Take_Place {

    private $childList=[];

    function  takechild(SChild $sChild){
      array_push($childList,$sChild);
    }
 
    function placechild(){
    

        foreach ($this->childList as $itemChildList) {
            $itemChildList->execute();
          }
          $itemChildList->clear();

     
    }
 }