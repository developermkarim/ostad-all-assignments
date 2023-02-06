<?php
$tuition_fee = 20000;

$result = ($tuition_fee >= 20000) ? 
"the commission of 25% is = " . (25 / 100) * $tuition_fee . " $"
:
 ($tuition_fee >= 10000 && $tuition_fee < 20000
  ?  "the commission of 20% = " . (20 / 100) * $tuition_fee. " $" 
 :
  ($tuition_fee < 10000 && $tuition_fee >= 7000 
  ? 
  "the commission rate of 50% = " . (15/100) * $tuition_fee. " $"
:
($tuition_fee < 7000 ? "invalid":'') ) );

 echo $result;

?>