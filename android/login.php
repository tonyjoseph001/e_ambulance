
<?php

  require_once("../database.php");
$username=$_REQUEST["username"];
$password=$_REQUEST["password"];
$qry="select * from login where username='$username' and password='$password'";
$result=mysql_query($qry);
$row=mysql_fetch_assoc($result);

$data=array();


if($row!=false)
{
	$data[]=$row;
	
}



echo json_encode($data);


?>
