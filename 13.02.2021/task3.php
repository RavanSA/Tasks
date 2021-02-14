<?php 
    /*******TASK3*******/
    function soz_kesen($metn3){
    $x = 4;
    $y = 6;

    for($i = 0; $i <= $y; $i++){
       echo $metn3[$x+$i-1];
      }
    }
    
    soz_kesen("Bu gunluk son tapsiriq");
?>