<?php

require  'index20-MySqlDatabase.php';

if($is_query_run = mysql_query("SELECT * FROM `user`")){
	
	echo"<br>query executed"; 
	
	while($data = mysql_fetch_assoc($is_query_run)){
echo'<table border = "2" style="width:300px"><tr><td>'.$data['UserID'].'</td><td>'.$data['UserName'].'</td><td>'.$data['UserAddress'].'</td></tr></table>';
		//echo '<br>'.$data['UserID'].' '.$data['UserName'].' '.$data['UserAddress'];
		
	}
}
else{
	
	echo"<br>query not executed";  
}
?>