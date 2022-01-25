<?php
include_once('IState.php');
include_once('SFootball.php');
include_once('NSFootball.php');
include_once("Singletonedataconfig.php");
class Context
{
    private IPlay $state;
    function __construct()
    {
    //$conn = SingleObject::getinstance();

        /*$sql="update Activity set active=1 where id=userID";
        $res = $conn->query($sql);
        
        $row = mysqli_fetch_array($res);
*/
        $this->state= new nsfootball();

    }
    function setState(IPlay $state)
    {
        $this->state=$state;
    }
    public function getState (){
        return $this->state;
    }
}