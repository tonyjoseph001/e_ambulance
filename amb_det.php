 <body background="../bgimg1.jpg">
 
 <?php
 
 require_once("header.php");
 
 ?>

<form id="form1" name="form1" method="post" action="amb_det1.php">
  <table width="328" height="280" border="1" align="center">
    <tr>
      <td height="48" colspan="2"><div align="center"><strong>AMBULANCE DETAILS</strong></div></td>
    </tr>
    <tr>
      <td width="156" height="46">NAME</td>
      <td width="156"><label>
        <input type="text" name="aname" id="textfield" pattern="[A-Z][a-z]{1,15}" required/>
      </label></td>
    </tr>
    <tr>
      <td height="35">LOCATION</td>
      <td><label>
	  <select name="alocation">
	  <?php
	  
require_once("../database.php");
	 $qry="select * from location";
$result = mysql_query($qry) or die(mysql_error());
 
  while($row = mysql_fetch_array($result))
  {
  ?>
  <option value="<?php echo $row["locid"] ?>"><?php echo $row["location"] ?></option>
  
  
  <?php
  }  
	  
	  
	  ?>
	  
	   
      </label></td>
    </tr>
    <tr>
      <td height="41">CONTACT</td>
      <td><label>
        <input type="text" name="contact" maxlength="10" pattern="[0-9]{10}" required/>
      </label></td>
    </tr>
    <tr>
      <td height="46">RATE</td>
      <td><label>
        <input type="text" name="arate" id="textfield3" pattern="[0-9]{}" required/>
      </label></td>
    </tr>
    <tr>
      <td height="48" colspan="2"><label>
        <div align="center">
          <input type="submit" name="submit" id="button" value="SUBMIT"/>
          </div>
      </label></td>
    </tr>
  </table>
</form>
</body> 