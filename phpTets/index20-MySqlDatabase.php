<?php

@mysql_connect('localhost','root','root') or die('cannot connect');
@mysql_select_db('test');
if(!@mysql_connect('localhost','root','root')){
	
	die('cannot make connection');//kill the page
	exit('cannot connect');//same meaning of DIE()
	
}
else{
	
	if(!@mysql_select_db('test')){
		
		die('cannot connect to db');//kill the page
		
		
	}
	else{
		
		echo'connected';
	}
	
	
}


?>