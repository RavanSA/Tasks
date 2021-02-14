<?php 
    /*******TASK1*******/
    function soz_sayan($metn){
    $metn = trim($metn);
    $metn =  preg_replace('/\s+/', ' ', $metn);
    $uzunluq = 0;
    $sayan  = 0;
    $i = 0;

    while($metn[$uzunluq] != "."){ 
      $uzunluq++;
    }

    while($i<$uzunluq){
      if($metn[$i] == " " ){
          $sayan++;
      }
    $i++;

      if($i == $uzunluq-1){
         $sayan++;s
      }

    }
    return $sayan;
  }  
   echo soz_sayan("   Bu   cumlede    tam-tamina yeddi soz   var var.   ");
?>