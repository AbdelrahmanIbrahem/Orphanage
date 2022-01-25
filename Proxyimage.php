<?php

use RealImage as GlobalRealImage;

include_once("Image.php");
include_once("Realimage.php");
class Proxyimage implements Image {
    private RealImage $realimage;
    private $filename;

    function __construct($Filename)
    {
        $this->filename=$Filename;
    }
    function display()
    {
        if($this->realimage==null)
        {
            $this->realimage=new GlobalRealImage($this->filename);
        }
    }

}