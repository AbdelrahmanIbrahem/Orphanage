<?php
class ChildReleased implements SChild{
private ChildPlace $place;
function __construct (ChildPlace $place){
    $this->place = $place;
}
function execute(){
$this->place->released();
}

}