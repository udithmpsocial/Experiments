<?php
$name = "sanju";

function test1(){
	
	
	global $name; //declare what am i used variable as a global, after we can use that
	echo  $name;
	
	
}

test1();
?>