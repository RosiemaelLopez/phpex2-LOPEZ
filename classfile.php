<?php

class classfile{

    function triangledge ($first, $second)
  {
    $lastedge = $first + $second - 1;
      echo 'The answer is ' . $lastedge.'.';
    }
    
    function bincount($binvalue)
    { 
        $count = 0;
        while($binvalue)
        {
            $count += ($binvalue & 1);
            $binvalue = $binvalue >> 1;
        }
    echo  'The answer is ' . $count.'.'.'';
    
    }
    function jparts ($pt1, $pt2)
    {
          $result =  str_replace('/', '', $pt1);
          $result .= "/" . str_replace('/', '', $pt2);
      echo '("'.$pt1 . '")'. '("' .$pt2. '")'. '→ ' .'"'. $result. '"';
    }  
    function sasnum ($sastrynumber)
    {
    $conc = $sastrynumber . $sastrynumber+1;
    $check = 0;
    for ($i = 1; $i * $i <= $conc; $i++) {
            if (($conc % $i == 0) && ($conc / $i == $i)) {
                $check = 1;
                echo 'Answer: '. $sastrynumber. '→ ' .$conc . '→'.'TRUE(' . $sastrynumber. ' is a perfect square)';
            }
        }
    if($check == 0){
      echo $sastrynumber. '→ '. $conc . '→'.'FALSE(' . $sastrynumber. ' is not a perfect square)';
       
    }
} 
}   

  