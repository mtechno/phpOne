<?php
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        continue;
    }

   echo $i . "\n";
   if($i == 7){
       echo "i = 7, stop" . "\n";
       break;
   }
   $i++;
}
