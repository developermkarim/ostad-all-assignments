<?php

function  oddEven($number)
{
    if ($number % 2 == 0) {
        return "$number is Even Number";
    }
    elseif($number % 2 == 1){

        return "$number is Odd Number";
    }
}
echo oddEven(8);  echo "<br>";

$initial = 0;
// $arr = [];
for ($i=1; $i <= 100; $i++) { 
  $initial += $i;
//   array_push($arr,$i);
//    array_sum($arr);
}
echo "Total Numbers or 1 to 100 = " . $initial;
// print_r($arr);

// echo array_sum($arr);
