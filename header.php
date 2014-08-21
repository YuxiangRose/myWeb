<?php
	$link = mysql_connect("localhost","root","");
	if(!$link){
		echo mysql_errno($link);
	}
	mysql_select_db('mydata');

?>
