<?php
$c = 1;

echo'<h1 style="color:red">while loop</h1>';

while($c<10){
	echo'testLoop'.$c.'<br>';
	$c++;
}

echo'<h1 style="color:green">do while loop</h1>';
$c = 1;
do{
	echo'testLoop'.$c.'<br>';
	$c++;
}
while($c<10);



?>