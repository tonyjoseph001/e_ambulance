<body background="../bgimg1.jpg">
 <?php
 
 require_once("header.php");
 
 ?>

<?php
require_once("../database.php");

$qry3="select * from ambdet";
$result1=mysql_query($qry3);
?>

  <table width="200" border="1" align="center">
    <tr>
      <td><strong>NAME</strong></td>
      <td><strong>LOCATION</strong></td>
      <td><strong>RATE</strong></td>
	  <td><strong>CONTACT</strong></td>
	  
    </tr>
	
	 <?php
  while($arr=mysql_fetch_array($result1))
  {?>
   
  
    <tr>
      <td><?php echo $arr['name']?> </td>
      <td><?php echo $arr['location']?></td>
      <td><?php echo $arr['rate']?></td>
	  <td><?php echo $arr['contact']?></td>
	  
    </tr>
  
  <?php
  }
  ?>
  </table>
  <?php

?>
<?php
 
 require_once("footer.php");
 
 ?>
 </body>