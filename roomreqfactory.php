<?php
include_once('roomreq.php');
include_once('bed.php');
include_once('bedsheet.php');
include_once('blanket.php');
class roomreqfactory{
    function getroomreq ($reqtype)
    {
        if($reqtype==null){
            return null;
        }
        if(strtoupper($reqtype)=="BED"){
            return new bed();
        }elseif(strtoupper($reqtype)=="BED SHEET"){
            return new bedsheet();
        }elseif(strtoupper($reqtype)=="BLANKET"){
            return new blanket();
        }
        return null;
    }
}
?>