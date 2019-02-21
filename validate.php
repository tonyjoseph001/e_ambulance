
<?php
require_once("database.php");

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
?>

