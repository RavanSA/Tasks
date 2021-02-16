<?php 
   $arr=array(
      "C:/" => array(
               "Windows" => array(
                            0 => "system",
                            1 => "system32",
                            2 => "systemapps"
                            ),
               "Users" => array( 
                          "Desktop" => array( 
                                   0 => "Documents",
                                   1 => "Pictures",
                                   2 => "Videos"
                                   ),
                          "guest" => array( 
                                   0 => "Documents",
                                   1 => "file1",
                                   2 => "file2")
                                   )                
                          )
   );

   function agaca_cevir( $TreeArray ) {
      echo "<ul style='list-style: none;'>";
      foreach ( $TreeArray as $key => $arr ) {
        if( is_string( $key )){
          echo $key;
        }
      echo "<li>";
        if( is_array( $arr )) {
           agaca_cevir( $arr );//recursive yol
        } else {
           echo $arr;
        }
      echo '</li>';
      }
      echo '</ul>';
   }

agaca_cevir( $arr );
?>