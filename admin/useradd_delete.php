


<?php

 
 require_once("header.php");
require_once("../database.php");
$qry="delete from useradd where uid=".$_REQUEST['id2']."";
mysql_query($qry) or die(mysql_error());

header("location:../admin/uadd.php");

?>
