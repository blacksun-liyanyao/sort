<?php
   $arr = array(11,-3,51,-7,9,100,2,-56,32,21);
   for($i=0;$i<count($arr)-1;$i++){
      for($j=$i+1;$j<count($arr);$j++){
        if($arr[$i]>$arr[$j]){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
          }
        }
   }
   foreach($arr as $value){
       echo $value.",";
   }
?>
