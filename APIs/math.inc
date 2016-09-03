<?php
  function eq2_solve($a, $b, $c) {

      $D = $b * $b - (4 * $a * $c);

      if($D < 0) return array("s1"=>-1, "s2"=>-1);
      else if($D == 0){
        $s = ((float)$b /(float)2*$a );
        return array("s1"=>$s, "s2"=>$s);
      }else{

        $s1 = ( (-1*$b) + sqrt($D)  ) / (float)(2.0 * $a);
        $s2 = ( (-1*$b) - sqrt($D)  ) / (float)(2.0 * $a);

        return array("s1"=>$s1, "s2"=>$s2);
      }


  }


?>
