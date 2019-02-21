<?php

$hostname="localhost";
$db_user="root";
$db_password="";
$database="eambu_db";

$bd=@mysql_connect($mysql_hostname,$db_user,$db_password) or die (mysql_error());

mysql_select_db($database,$bd) or die("could not select database");
?>