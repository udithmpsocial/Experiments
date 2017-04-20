<?php

function test1(){
	 
	echo '<b style="color:red">function..............................: </b>';
}

function test2($num1, $num2){
	
	echo '<br><b style="color:red">function with arguments..............: </b>'.($num1 + $num2);
}

function test3($num1, $num2){
	
	return $num1*$num2;
	
	
}

test1();
test2(2,2);
echo '<br><b style="color:red">function with arguments and returns : </b>'.test3(2,5);

?>