<?php
include_once("Image.php");
class RealImage implements Image
{
    private $filename;
    function __construct($Filename)
    {
        $this->filename=$Filename;
        simplexml_load_file($Filename);
    }
    function display()
    {
        print("displaying".$this->Filename);
    }
    function loadfromdisk($Filename)
    {
        print("Loading".$Filename);
    }
}
?>