<?php
for ($i=1; $i < 20 ; $i++) {  // $i is incrementing here
   
    for ($j=$i; $j <=20 ; $j++) {  // $j is incrementing here
        
         echo "&nbsp" ; // it will print the blank space
    }

    for ($x=1; $x <= $i ; $x++) {  //$x is incrementing here
        
        echo " * " ; // it will print the * sign.
    }
    echo "<br>";
}
?>