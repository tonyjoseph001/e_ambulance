<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="location.php">
  <p>
    <select name="alocation" id="select">
    <?php
    require_once('../database.php');
$qry = "select * from location";
$result = mysql_query($qry);
while($row=mysql_fetch_array($result))
{	?>
   <option value="<?php  echo $row["locid"]?>"><?php echo $row["location"];?></option>
    <?php
}
?>
</select>
    <label>
    <input type="submit" name="Search" value="SEARCH" />
    </label>
  </p>
  
</form>


<?php
  if(isset($_POST["Search"]))
  {
   $loc_id=$_POST['alocation'];
   
   $qry3="select * from ambdet a join location l on(l.locid=a.location) where l.locid=$loc_id";
    $result1=mysql_query($qry3);
	 
    
   
    ?>
   
  
   <?php
   while($row=mysql_fetch_array($result1))
   { ?>
   <table>
   <tr><td><strong>AMBULANCE NAME &nbsp;&nbsp;&nbsp;:-</strong> <?php echo $row['name'];?></td>
   </tr>
   <tr><td><strong>LOCATION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</strong> <?php echo $row['location'];?></td>
   </tr>
   <tr><td><strong>RATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</strong> <?php echo $row['rate'];?></td>
   </tr>
  <tr><td><strong>CONTACT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</strong> <a href="tel:<?php echo $row['contact'];?>"><?php echo $row['contact'];?></a></td></tr>
  
 
   <br />   
  <br />     
   
  <?php } ?>
</table>
<?php   } ?>
 
</body>
</html>