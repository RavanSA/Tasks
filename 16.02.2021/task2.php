    <?php
          function sahmat_cek(){
            echo "<table width='270px' cellspacing='0px' cellpadding='0px' >";
            $str = "abcdefgh";

            echo "<thead>";
              echo "<tr>";
                 echo "<td height=4px  bgcolor=#312e2b></td>";
                 for ( $k = 1 ; $k <= 8 ; $k++ ) {
                 echo "<td height=4px bgcolor=#312e2b></td>";
                 }
                 echo "<td height=4px bgcolor=#312e2b></td>";
              echo "</tr>";
            echo "</thead>";

            for( $i = 1 ; $i <= 8 ; $i++ ) {
               echo "<tr>";
               for ( $j = 0 ; $j <= 8; $j++ ) {
               $toplam = $i + $j;
               if ( $toplam %2 == 0 && $j != 0){
                 echo "<td height=30px width=50px bgcolor=#b58863></td>";
               } else if ( $toplam %2 != 0 && $j != 0){
                 echo "<td height=30px width=50px bgcolor=#f1d9b5></td>";
               }
          
            if ( $j == 8 ){    
                echo "<td  width=10px bgcolor=#312e2b></td>";
            } else if ( $j == 0 ){
                echo "<td  width=15px bgcolor=#312e2b>";
                echo "<span style=color:#989695;>".$i."<span";
                echo "</td>";
            }
        }  
     }
            echo "</tr>";
            echo "<tfoot>";
              echo "<tr>";
                echo "<td height=10px  bgcolor=#312e2b></td>";
                 for ($k=0 ;isset($str[$k]) ;$k++){
                 echo "<td height=10px bgcolor=#312e2b>
                <span style=color:#989695;>".$str[$k]."</span></td>";
               }
                 echo "<td height=10px bgcolor=#312e2b></td>";
              echo "</tr>";
            echo "</tfoot>";
     }
         sahmat_cek();

   ?>