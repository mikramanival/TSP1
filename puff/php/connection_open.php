<?php
$db_name="ragnarok";
$db_user="root";
$db_pass="sample";
$local = "localhost";

$connect = mysql_connect($local,$db_user,$db_pass) 
			or die(mysql_error());

			
$select = mysql_select_db($db_name) 
			or die(mysql_error());
	



?>