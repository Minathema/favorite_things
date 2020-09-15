<?php
if( $_REQUEST["animal"] &&  $_REQUEST["food"] &&  $_REQUEST["colour"])
{
   $animal = $_REQUEST['animal'];
    $food = $_REQUEST['food'];
      $colour = $_REQUEST['colour'];
   echo "animal: ". $animal."<br>"."food:".$food."<br>"."colour:".$colour;
}

?>
