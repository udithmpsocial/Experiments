<?php

echo' <h1 style ="color:red">Data output page by get method</h1> ';


if(isset( $_GET["nameTxt"]) && isset($_GET["addTxt"]) && isset($_GET["ageTxt"])){

$name = $_GET["nameTxt"];
$add = $_GET["addTxt"];
$age = $_GET["ageTxt"];
if(!empty($name) && !empty($add) && !empty($age)){
echo $_GET["nameTxt"].'<br>';
echo $_GET["addTxt"].'<br>';
echo $_GET["ageTxt"].'<br>';
} 
else{
	
	echo'please fill all fields';
	
}
}


?> 