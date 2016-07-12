<?php
     $arr = array(33,44,66,88,32,-11,109,79,26);
     $flag = false;
     for($i=1;$i<count($arr);$i++){
           for($j=0;$j<count($arr)-$i;$j++){
                   if($arr[$j]>$arr[$j+1]){
                        $tmp = $arr[$j];
                        $arr[$j] = $arr[$j+1];
                        $arr[$j+1] = $tmp;
                        $flag = true;
                        }
                }
                  if(!$flag){
                        break;
                        }
        }
        foreach($arr as $value){
                echo $value.",";
        }
?>
