
<?php
 
 require_once("header.php");
require_once("../database.php");
?>
<body background="../bgimg1.jpg">
<form id="form1" name="form1" method="post" action="">
  
<?php
//$a=$_REQUEST['id'];


$qry="select * from useradd where uid=".$_REQUEST['id']."";
$res=mysql_query($qry);
while($arr=mysql_fetch_array($res))

{
$a0=$arr['uid'];
$a1=$arr['name']; 
$a2=$arr['address'];
$a3=$arr['phone'];
$a4=$arr['place'];
}

?>
<table width="356" border="1" align="center">
    <tr>
      <td height="42" colspan="2"><div align="center"><strong>USER EDIT</strong></div></td>
    </tr>
    <tr>
      <td height="44">UID</td>
      <td><label>
        <input type="text" name="ueid" readonly="readonly" id="textfield5" value="<?php echo $a0; ?> " />
      </label></td>
    </tr>
    <tr>
      <td width="167" height="43">NAME</td>
      <td width="173"><label>
        <input type="text" name="uename" id="textfield" value="<?php echo $a1;?>" pattern="[A-Z][a-z]{1,15}" required/>
      </label></td>
    </tr>
    <tr>
      <td height="44">ADDRESS</td>
      <td><label>
        <input type="text" name="ueaddress" id="textfield2" value="<?php echo $a2;?>" pattern="[A-Z][a-z]{1,15}" required/>
      </label></td>
    </tr>
    <tr>
      <td height="34">PHONE NO:</td>
      <td><label>
        <input type="text" name="uephone" id="textfield3" value="<?php echo $a3;?>" maxlength="10" pattern="[0-9]{10}" required/>
      </label></td>
    </tr>
    <tr>
      <td height="42">PLACE</td>
      <td><label>
        <input type="text" name="ueplace" id="textfield4" value="<?php echo $a4;?>" pattern="[A-Z][a-z]{1,15}" required/>
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
$b1=$_REQUEST['ueid'];
$b2=$_REQUEST['uename'];
$b3=$_REQUEST['ueaddress'];
$b4=$_REQUEST['uephone'];
$b5=$_REQUEST['ueplace'];

//$str="update useradd set name='".$b2."',address='".$b3."',phone='.$b4.',place='".$b5."' where uid='.$b1.'"; 
$str="update useradd set name='".$b2."',address='".$b3."',phone=".$b4.",place='".$b5."' where uid=".$_REQUEST['id'].""; 
mysql_query($str);
echo $str;

header("location:../admin/uadd.php");
}
?>
<?php
 
 require_once("footer.php");
 
 ?>