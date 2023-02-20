<?php
function sortByLength($arr) {
    usort($arr, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $arr;
  }
  $fruits = array("apple", "banana", "orange", "pineapple", "kiwi");
  $sorted = sortByLength($fruits);
  print_r($sorted);
  // 
echo "<br>";

  function concatinat(){
    $str1 = "Hellow";
    $str2 = "World";
  return  $str2  ." " . $str1;

  }
  echo concatinat();
  echo "<br>";

  function arr_to_new_arr($fruits){
    array_shift($fruits);
    array_pop($fruits);
    return $fruits;
  };
$array = array("apple", "banana", "orange", "pineapple", "kiwi");
 print_r(arr_to_new_arr($array));
 echo "<br>";

 function validationCheck($string){
    if(!preg_match("/^[a-zA-Z\s]+$/",$string)){
        return $errors[] = "Name must only contain letters!";
    }
    else{
        return "valid input";
    }
}

$string = "hello web developer";
echo validationCheck($string); echo "<br>";

function largestSecondNumber( array $number ): int {
    rsort( $number );
    return $number[1];
}
$number = array( 2, 4, 67, 7, 34, 100 );
echo "The largest second number is " . largestSecondNumber( $number );
?>