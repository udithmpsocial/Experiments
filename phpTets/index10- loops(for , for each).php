<?php
$count = 1;
echo'<h1 style="color:red"> for loop</h1>';

for($count; $count<10; $count++){
	
	echo'round : '.$count.'<br>';
}

echo'<br><h1 style="color:green"> for each loop</h1><i style="color:green">display one by one without calling any array indexes of a normel array</i><br>';

$names = array('a','b','c','d','e','f');
    foreach($names as $nameout){
	
	echo'name = '.$nameout.'<br>';
	
    }

echo'<br><i style="color:green">display one by one without calling any array indexes of multidimentional array</i><br>';
$students = array(
				array('a',1,2),
				array('b',3,4),
				array('c',5,6)
				); 
	foreach($students as $student => $arrayout){
		echo '<br>'.$student.' ';
		foreach($arrayout as $out)
		echo $out.' ';
	}


?>