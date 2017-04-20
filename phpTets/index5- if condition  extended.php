<?php 
$no1 = 5;
$no2 = 10;


//comparision operators
if($no1 == $no2){
	echo'equal';
}
else if($no1 === $no2){
	echo'equal value of no1 and no2, equal type of no1 and no2 ';
}
else if($no1 != $no2){
	echo'no1 and no2 not equal';
}
else if($no1 <> $no2){
	echo'no1 and no2 not equal';
}
else if($no1 !== $no2){
	echo'not equal value of no1 and no2, not equal type of no1 and no2';
}
else if($no1 < $no2){
	echo'no1 less than no2';
}
else if($no1 > $no2){
	echo'no1 grater than no2';
}
else if($no1 <= $no2){
	echo'no1 less than or equal no2';
}
else if($no1 >= $no2){
	echo'no1 grater than or equal no2';
}

//logical operators
if(($no1 == $no2) and ($no1 === $no2)){
	echo'equal value of no1 and no2 AND equal type of no1 and no2 ';
}
else if(($no1 == $no2) && ($no1 === $no2)){
	echo'equal value of no1 and no2 AND equal type of no1 and no2 ';
}
else if(($no1 == $no2) or ($no1 === $no2)){
	echo'equal value of no1 and no2 OR equal type of no1 and no2 ';
}
else if(($no1 == $no2) || ($no1 === $no2)){
	echo'equal value of no1 and no2 OR equal type of no1 and no2 ';
}
else if(($no1 == $no2) xor ($no1 === $no2)){
	echo'equal value of no1 and no2, equal type of no1 and no2 both  ';
}
else if(!($no1 == $no2)){
	echo'not equal value of no1 and no2';
}


?>