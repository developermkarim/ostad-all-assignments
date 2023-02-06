<?php
$tuition_fee = 7000;

if($tuition_fee > 20000){
    echo "the commission of 25% is = " .(25 / 100) * $tuition_fee . " $";
}
elseif($tuition_fee > 10000 && $tuition_fee < 20000){
    echo "the commission of 20% = " . (20 / 100) * $tuition_fee. " $";
}
elseif($tuition_fee < 10000 && $tuition_fee > 7000 ){
    echo "the commission rate of 50% = " . (50/100) * $tuition_fee. " $";
}
elseif($tuition_fee < 7000){
    echo "The data is invalid";
} 



?>