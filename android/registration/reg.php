<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="356" border="1" align="center">
    <tr>
      <td height="42" colspan="2"><div align="center"><strong>REGISTRATION</strong></div></td>
    </tr>
    <tr>
      <td width="166" height="40">NAME</td>
      <td width="174"><label>
        <input type="text" name="textfield" />
      </label></td>
    </tr>
    <tr>
      <td height="47">ADDRESS</td>
      <td><label>
        <input type="text" name="textfield2" />
      </label></td>
    </tr>
    <tr>
      <td height="47">PLACE</td>
      <td><label>
        <input type="text" name="textfield3" />
      </label></td>
    </tr>
    <tr>
      <td height="42">PHONE/USERNAME</td>
      <td><label>
        <input type="text" name="textfield4" />
      </label></td>
    </tr>
    <tr>
      <td height="44">PASSWORD</td>
      <td><label>
        <input type="text" name="textfield5" />
      </label></td>
    </tr>
    <tr>
      <td height="51" colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="REGISTER" />
          </div>
      </label></td>
    </tr>
  </table>
  <?PHP
  if(isset($_REQUEST['Submit']))
  {
  require_once("../../database.php");
  $name=$_POST['textfield'];
  $address=$_POST['textfield2'];
  $place=$_POST['textfield3'];
  $phone=$_POST['textfield4'];
  $password=$_POST['textfield5'];
  $utype='customer';
  $qry="insert into login(username,password,usertype)values('$phone','$password','$utype')";
    mysql_query($qry);
  $qry1="insert into useradd(name,address,phone,place)values('$name','$address','$phone','$place')";
  
 mysql_query($qry1);
  
  
  }
  ?>
</form>
</body>
</html>
