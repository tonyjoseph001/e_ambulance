
<?php

 
 require_once("header.php");
require_once("../database.php");
$qry="delete from ambdet where amb_no=".$_REQUEST['id3']."";
mysql_query($qry) or die(mysql_error());

header("location:../admin/amb_det1.php");

?>
