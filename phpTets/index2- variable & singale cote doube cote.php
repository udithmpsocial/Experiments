<?php
$value = 100;
$value2 = "sanju";
echo $value ;
echo "<br><h1>ddd$value2"; // output the value of variable

echo '<br><h1>ddd$value2'; // output the actuall string insid the single cote

echo '<br><h1>ddd'. $value2; // output the value of variable by concatination with "." sign

echo '<br><h1>ddd'. $value2 . 'concatination' .$value ; // output the value of variable by multiple concatination with "." sign

?>