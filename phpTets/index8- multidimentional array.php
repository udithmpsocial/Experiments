<?php
/*
Students
Name	Age	weight
a		1	2
b		3	4
c		5	6
*/

echo'<h1 style="color:green">approach 1 for define multidimentional array</h1>';

$students = array(
				array('a',1,2),
				array('b',3,4),
				array('c',5,6)
				); //approach 1 for define multidimentional array

				echo $students[0][0].''.$students[0][1].''.$students[0][2].'<br>';
				echo $students[1][0].''.$students[1][1].''.$students[1][2].'<br>';
				echo $students[2][0].''.$students[2][1].''.$students[2][2].'<br>';
				

				echo'<h1 style="color:red">approach 2 for define associative multidimentional array</h1>';
$students2 = array(
				array('name'=>'a','age'=>1,'wegt'=>2),
				array('name'=>'b','age'=>3,'wegt'=>4),
				array('name'=>'c','age'=>5,'wegt'=>6)
				); //approach 2 for define associative multidimentional array 

				echo $students2[0]['name'].''.$students2[0]['age'].''.$students2[0]['wegt'].'<br>';
				echo $students2[1]['name'].''.$students2[1]['age'].''.$students2[1]['wegt'].'<br>';
				echo $students2[2]['name'].''.$students2[2]['age'].''.$students2[2]['wegt'].'<br>';
				
?>