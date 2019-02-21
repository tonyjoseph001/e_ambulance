
<!DOCTYPE html>
<body background="../bgimg1.jpg">
<?php
 
 require_once("header.php");
 
 ?>


<?php
require_once("../database.php");
?>
<body>
<form id="form1" name="form1" method="post" action="">
  
<?php
//$a=$_REQUEST['id'];


$qry="select * from ambdet where amb_no=".$_REQUEST['id1']."";
$res=mysql_query($qry);
while($arr=mysql_fetch_array($res))

{
$a0=$arr['amb_no'];
$a1=$arr['name']; 
$a2=$arr['location'];
$a3=$arr['rate'];
$a4=$arr['contact'];

}

?>
<table width="357" border="1" align="center">
    <tr>
      <td height="40" colspan="2"><div align="center"><strong>AMBULANCE EDIT</strong></div></td>
    </tr>
    <tr>
      <td height="43">AMBULANCE NO:</td>
      <td><label>
        <input type="text" name="ambno" readonly="readonly" id="textfield5"  value="<?php echo $a0; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td width="135" height="45">NAME</td>
      <td width="144"><label>
        <input type="text" name="aname" id="textfield" value="<?php echo $a1;?>" pattern="[A-Z][a-z]{1,15}" required/>
      </label></td>
    </tr>
    <tr>
      <td height="44">LOCATION</td>
      <td><label>
        <input type="text" name="alocation" id="textfield2" value="<?php echo $a2;?>"/>
      </label></td>
    </tr>
    <tr>
      <td height="48">RATE</td>
      <td><label>
        <input type="text" name="arate" id="textfield3" value="<?php echo $a3;?>" pattern="[0-9]{}" required/>
      </label></td>
    </tr>
	 <tr>
      <td height="40">CONTACT</td>
      <td><label>
        <input type="text" name="contact" id="textfield4" value="<?php echo $a4;?>" maxlength="10" pattern="[0-9]{10}" required/>
      </label></td>
    </tr>
    
     
    
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="sbtn" id="button" value="SUBMIT"/>
          </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
//require_once("../database.php");
if(isset($_REQUEST['sbtn']))
{
$b1=$_REQUEST['ambno'];
$b2=$_REQUEST['aname'];
$b3=$_REQUEST['alocation'];
$b4=$_REQUEST['arate'];
$b5=$_REQUEST['contact'];

//$str="update useradd set name='".$b2."',address='".$b3."',phone='.$b4.',place='".$b5."' where uid='.$b1.'"; 
$str="update ambdet set name='".$b2."',location='".$b3."',rate=".$b4.",contact=".$b5." where amb_no=".$_REQUEST['id1'].""; 
mysql_query($str);
echo $str;

header("location:../admin/amb_det1.php");
}
?>
 <?php
 
 require_once("footer.php");
 
 ?>
 </body>
 