<?php
include_once('roomreq.php');
include_once('bed.php');
include_once('bedsheet.php');
include_once('blanket.php');
include_once("roomreqfactory.php");
       $shapeFactory = new roomreqfactory();

      $shape1 = $shapeFactory->getroomreq("BED");
      $shape1->add();
      print($shape1->add());

      $shape2 = $shapeFactory->getroomreq("BEDSHEET");
      $shape2->add();
      print($shape2->add());

      $shape3 = $shapeFactory->getroomreq("BLANKET");
      $shape3->add();
      print($shape3->add());


?>  
