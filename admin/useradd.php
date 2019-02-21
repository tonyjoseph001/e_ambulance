
 <body background="../bgimg1.jpg"> 
 <?php
 
 require_once("header.php");
 
 ?>
<form id="form1" name="form1" method="post" action="uadd.php">
  <table width="359" border="1" align="center">
    <tr>
      <td height="41" colspan="2"><div align="center"><strong>USER ADD</strong></div></td>
    </tr>
    <tr>
      <td width="172" height="40">NAME</td>
      <td width="171"><label>
        <input type="text" name="uname" id="textfield" pattern="[A-Z][a-z]{1,15}" required />
      </label></td>
    </tr>
    <tr>
      <td height="40">ADDRESS</td>
      <td><label>
        <input type="text" name="uaddress" id="textfield2"  pattern="[A-Z][a-z]{1,15}" required />
      </label></td>
    </tr>
    <tr>
      <td height="39">PHONE NO:</td>
      <td><label>
        <input type="text" name="uphone" id="textfield3" maxlength="10" pattern="[0-9]{10}" required />
      </label></td>
    </tr>
    <tr>
      <td height="39">PLACE</td>
      <td><label>
        <input type="text" name="uplace" id="textfield4"  pattern="[A-Z][a-z]{1,15}" required />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="submit" id="button" value="SUBMIT" />
          </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
 
 
