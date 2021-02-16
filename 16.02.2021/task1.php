<?php 

    function arr_cedvel( $arr ) {

       echo "<table border = 1>
            <tr>
              <th>Ad, Soyad</th>
              <th>Yas</th>
              <th>Cins</th>
            </tr>";

       for ( $row = 0; $row < sizeof($arr); $row++ ) {
         echo "<tr>";
         for ( $col = 0; $col < 3; $col++ ) {
            echo "<td>".$arr[$row][$col]."</td>";  
         }
         echo "</tr>";
       }
       echo "</table>";
    }
    
    function yas_ortalamasi( $arr ){
      $yasortalamasi = 0;

      for ($row = 0; $row < sizeof( $arr ); $row++) {
         $yasortalamasi += $arr[ $row][ 1 ];
      }

      $yasortalamasi /= sizeof( $arr );
      return $yasortalamasi;
    }

    function yas_boyuk($arr){
      $yasboyuk=$arr[1][1];
      $adboyuk =" ";
      for ($row = 0; $row < sizeof($arr); $row++) {
         if($arr[$row][1] > $yasboyuk){
               $yasboyuk=$arr[$row][1];
               $adboyuk=$arr[$row][0];
         } 
      }
      return $adboyuk;
    }

    function yas_kicik($arr){
      $yaskicik=$arr[1][1];
      $adkicik =" ";
      for ($row = 0; $row < sizeof($arr); $row++) {
         if($arr[$row][1] < $yaskicik){
               $yaskicik=$arr[$row][1];
               $adkicik=$arr[$row][0];
         } 
      }
      return $adkicik;
    }

    function oglan_qiz_sayi($arr){
      $cinsisay=0;
      for ($row = 0; $row < sizeof($arr); $row++) {
          if($arr[$row][2]== "q" || $arr[$row][2]== "k" ){
              $cinsisay+=1;
          }
      }
      return $cinsisay;
    }

    function sinif_sayi($arr){
      return sizeof($arr);
    }

    $array = array (
             array("Nermin Eliyeva",10,"q"),
             array("Kamil Rahimli",22,"basqa"),
             array("Zaur Qurbaneliyev",12,"k"),
             array("Melahet Isgenderli",39,"q"),
             array("Ali Rzayev",13,"k"),
             array("Ramin Orucov",52,"k"),
             array("Veli Kerimli",14,"k"),
             array("Zamiq Aliyev" ,3,"q"),
             array("Esmaye Mustafayeva" ,12,"basqa"),
             array("Veli KERIMLI" ,51,"k")
             );

      arr_cedvel($array);
      echo "Sinifdeki oglanlarin ve gizlarin sayi: ".oglan_qiz_sayi($array)."<br>";
      echo "Sinifdeki usaqlarin umumi yas ortalamasi: ".yas_ortalamasi($array)."<br>";
      echo "Sinifdeki en boyuk usaq: ".yas_boyuk($array)."<br>"."Sinifdeki en kicik usaq: ".yas_kicik($array);
      echo "<br>"."Sinifdeki usaqlarin umumi sayi: ".sinif_sayi($array);
?>