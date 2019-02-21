<body background="../bgimg1.jpg">
<?php
 require_once("header.php");
require_once("../database.php");
if(isset($_REQUEST['submit']))
{
$name=$_POST['aname'];
$location=$_POST['alocation'];
$rate=$_POST['arate'];
$contact=$_POST['contact'];

$qry2="insert into ambdet(name,location,rate,contact) values('".$name."','".$location."',".$rate.",".$contact.")";
$result=mysql_query($qry2);
}
$qry3="select * from ambdet a join location l on(l.locid=a.location)";
$result1=mysql_query($qry3);

?>

<div align="left"></div>
<table width="200" border="1" align="center">
    <tr>
      <td><strong>NAME</strong></td>
      <td><strong>LOCATION</strong></td>
      <td><strong>RATE</strong></td>
      <td><strong>CONTACT</strong></td>
      <td><strong>EDIT</strong></td>
	  <td><strong>DELETE</strong></td>
  </tr>
    
  <?php
  while($arr=mysql_fetch_array($result1))
  {?>
   <tr>
      <td><?php echo $arr['name']?></td>
      <td><?php echo $arr['location']?></td>
      <td><?php echo $arr['rate']?></td>
	   <td><?php echo $arr['contact']?></td>
	  <td><a href="amb_det_edit.php?id1=<?php echo $arr['amb_no']?>">Edit</a></td>
	   <td><a href="amb_det_delete.php?id3=<?php echo $arr['amb_no']?>">Delete</a></td>
    </tr>
  
  <?php
  }
  
  ?>
  </table>
 </body> 
  