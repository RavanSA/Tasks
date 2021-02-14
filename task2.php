<?php 
    /**************TASK1**********/
   $soz = "Proqramlasdirma";
   $soz = trim(strtolower($soz));
-  $uzunluq = $i = $k = $a = $arruzunluq = 0;
   $arrherf = [];

   while(isset($soz[$uzunluq])){ 
      $uzunluq++;
    }

    if($uzunluq == 0){
       echo "Uzunluq 0 dir";
    } else {
       while($i < $uzunluq){
         $arrherf[] = 1; 
         $j = $i + 1;
         while($j < $uzunluq){
            if($soz[$i] == $soz[$j]){
              $arrherf[$i] += 1;
              $soz[$j] = 'x';  
            }
            $j++;
         }
         $i++;
       }
    }

    while(isset($arrherf[$arruzunluq])){ 
      $arruzunluq++;
    } 

   
    while($a < $arruzunluq){
        if($soz[$a] != 'x'){  
          echo $soz[$a]; echo " --> ";
          echo $arrherf[$a]; echo "<br>";  
        } 
        $a++;
    }
    echo "<hr>";


    /**************TASK2**********/
    $saat1 = "13:00";
    $saat2 = "03:30";
    $saat3 = "23:05";


    function timeAMPM($saat){
        $saat = explode(":",$saat);
        $hour= $saat[0];
        $minute= $saat[1];
        $time= $hour > 11 ? " PM" : " AM";

        $hour = ($hour %= 12) == 0 ? 12 : $hour;

       echo ($hour >=10 ?  $hour.":".$minute.$time."<br>" : 
       "0".$hour.":".$minute.$time."<br>" );

    }

    timeAMPM($saat1);
    timeAMPM($saat2);
    timeAMPM($saat3);

    echo "<hr>";


    /**************TASK3**********/
    $tarix1="07-04-2000";
    $tarix2="12-05-1977";

    function DMYformat($tarix){
       $tarix = explode("-",$tarix);
       $month=$tarix[1];
       $months = array( '01' => 'Yanvar',
                        '02' => 'Fevral.', 
                        '03' => 'Mart', 
                        '04' => 'Aprel', 
                        '05' => 'May', 
                        '06' => 'Ýyun', 
                        '07' => 'Ýyul',
                        '08' => 'Avqust.',
                        '09' => 'Sentyabr.',
                        '10' => 'Oktyabr', 
                        '11' => 'Noyabr', 
                         '12' => 'Dekabr'
                        );
       echo $tarix[0]." ".$months[$month].", ".$tarix[2]."<br>";
    }

    DMYformat($tarix1);
    DMYformat($tarix2);

?>