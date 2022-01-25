

<?php
if ($_POST) {
    if (isset($_POST['Football']) && $_POST['Football'] == "Football") {
        
include_once('../Model/IState.php');
include_once('../Model/SFootball.php');
include_once('../Model/NSFootball.php');
include_once('../Model/Context.php');
  $context = new Context();
      $Value = $_POST['sub'];

      if($Value==1)
      {  
      $startState = new sfootball();
      $startState->football($context);
      }
      else {
       $stopState = new nsfootball();
       $stopState->football($context);          
      }
     
      $state;
      $state= $context->getState();
      print($state->currentstate());
    }
}
 
?>
