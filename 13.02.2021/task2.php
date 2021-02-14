<?php 
    /*******TASK2*******/
    function bosluqlari_silen($metn2){
    $metn2 = trim($metn2);
    $metn2 =  preg_replace('/\s+/', ' ', $metn2);
    $metn2 = ucfirst($metn2);
    $length = 0;

    while (isset($metn2[$length])) {
       $length++;
    }

    for($a = 0; $a < $length; $a++){
      if($metn2[$a] == "."){
        if(ctype_space($metn2[$a+1])){
        $metn2[$a+2] = strtoupper($metn2[$a+2]);
        }else{
        $metn2[$a+1] = strtoupper($metn2[$a+1]);
        }
      }
    }
    
    return $metn2;
    
  }
  
  echo bosluqlari_silen("  bu birinci.    bu ikinci cumle.   bu ucuncu cumle.bu dorduncu cumle.         bu besinci cumle.    bu altinci cumle");
?>