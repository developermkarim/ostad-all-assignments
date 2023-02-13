<?php
$x = 1;
while($x < 10){
    echo $x; echo "<br>";
    $x++;
};
echo "<br>";
echo "<h2>Do While Loop Here</h2>";

$number = 1;
do{
    
    echo $number; echo "<br>";
    $number++;
}while($number < 10);

function add(int $num2, int $num3) {
    $result1 = $num2 + $num3;
    $result2 = $num2 - $num3;
    return [ 
       'result1'=> $result1,
       'result2'=> $result2
    ];
};
$result = add(12,33);
echo $result['result1']; echo "<br>";


 function display($number){
    if($number <= 5){
        echo "$number";echo "<br>";
        display($number + 1);
    }
}
display(1);

?>