<?php
/* function gcd($a, $b) {
    while($a != $b){
        if($a > $b) {
            $a -= $b;
        }
        else {
            $b -= $a;
        }
    }
    return $a;
}
echo gcd(12,18); */
function largest_str_word($str)
{
    $str_to_arr = explode(" ",$str);
        $lg_word = "";
        foreach ($str_to_arr as $key => $value) {
            if (strlen($value) > strlen($lg_word)) {
              $lg_word = $value;
            }
        }
        echo $lg_word;
    }

$res = "The quick fox jumped over the lazy dog";
largest_str_word($res);
?>