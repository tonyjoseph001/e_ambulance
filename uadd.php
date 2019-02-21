<body background="../bgimg1.jpg">
<?php

 
 require_once("header.php");
require_once("../database.php");
if(isset($_REQUEST['submit']))
{
$uaname=$_REQUEST['uname'];
$uaaddress=$_REQUEST['uaddress'];
$uaphone=$_REQUEST['uphone'];
$uaplace=$_REQUEST['uplace'];

$qry1="insert into useradd (name,address,phone,place)values('".$uaname."','".$uaaddress."',".$uaphone.",'".$uaplace."')";
$result=mysql_query($qry1);
}
$qry4="select * from useradd";
$result2=mysql_query($qry4);
?>

<table width="200" border="1" align="center">
    <tr>
      <td><strong>NAME</strong></td>
      <td><strong>ADDRESS</strong></td> 
      <td><strong>PHONE</strong></td>
      <td><strong>PLACE</strong></td>
      <td><strong>EDIT</strong></td>
	  <td><strong>DELETE</strong></td>
  </tr>
	
	<?php
	
  while($arr=mysql_fetch_array($result2))
  {?>
   <tr>
      <td><?php echo $arr['name']?></td>
      <td><?php echo $arr['address']?></td>
      <td><?php echo $arr['phone']?></td>
      <td><?php echo $arr['place']?></td>
      <td><a href="useredit.php?id=<?php echo $arr['uid']?>">Edit</a></td>
	  <td><a href="useradd_delete.php?id2=<?php echo $arr['uid']?>">Delete</a></td>   </tr>
  
  <?php
  }
  ?>
  </table>
  </body>