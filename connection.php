<?php
	// mysql_connect('localhost','root','');
	// mysql_select_db('dbgraphic');
	$con=mysql_connect('http://216.224.161.207','heart','fs40lP.:W.hA5h7I');
	mysql_select_db('db_heart_foundation');
	if(!$con){
		echo "no connection";
	}
?>

