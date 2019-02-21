<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body background="bgimg1.jpg">

<form id="form1" name="form1" method="post" action="" >
  <table width="330" height="267" border="1" align="center">
    <tr>
      <td height="47" colspan="2"> <div align="center"><strong>LOGIN</strong></div></td>
    </tr>
    <tr>
      <td width="157" height="52">USERNAME</td>
      <td width="157"><label>
        <input type="text" name="uname" id="textfield"/>
      </label></td>
    </tr>
    <tr>
      <td height="53">PASSWORD</td>
      <td><label>
        <input type="password" name="pword" id="textfield2" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="LOGIN" />
      </div>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
         <div align="center">
           <input type="submit" name="reg" id="button" value="REGISTER NOW" />
         </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_REQUEST['Submit']))
{
require_once("database.php");
//header("Location:validate.php");
$username=$_POST["uname"];
$password=$_POST["pword"];

$qry="select * from login where username='$username' and password='$password'";


$result=mysql_query($qry);
if($result)
{
$row=mysql_fetch_array($result,MYSQL_ASSOC);
//var_dump($row);  //printing value
if ($row==false)
{
echo "<script>alert('Login failed');location.href='login.php';</script>";
}
elseif($row["usertype"]=="admin")
{
header("location:admin/adminhome.php");
}
else
{
echo "Login failed...";
}
}
}
if(isset($_REQUEST['reg']))
{
header("Location:android/reg.php");
}
?>
