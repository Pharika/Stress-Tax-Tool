<html> 
<head> 
<title>REGISTER PAGE</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<body> 
<form method="post" target="_self"  action="register.php">
<center>
<fieldset>
<legend>ENTER YOUR DETAILS</legend>
<h2> PERSONAL  DETAILS</h2>
FIRSTNAME:<input type="text" size="20" maxlength="20" name="fname"><br />
<br />
MIDDLE NAME:<input type="text" size="20" maxlength="20" name="mname"><br />
<br />
LASTNAME:<input type="text" size="20" maxlength="20" name="lname"><br />
Gender::<br />
Male:<input type="radio" value="Male" name="gender">:<br />
Female:<input type="radio" value="Female" name="gender">:<br />

Date of Birth:
<select name="month">
<option value="">Month</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>

<select name="day">
<option value="">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<input type="text" name="year" value="YYYY" size="4" /><br/>
<hr/>
<h2> CONTACT  DETAILS</h2>
ADDRESS1:<input type="text" size="60" maxlength="60" name="add1"><br>
<br />
ADDRESS2:<input type="text" size="60" maxlength="60" name="add2"><br />
<br />
CITY:<input type="text" size="20" maxlength="20" name="city"><br />
<br />
STATE:<input type="text" size="20" maxlength="20" name="state"><br />
<br />
ZIPCODE:<input type="text" name="zip" size="6"><br/>
<br />
EMAIL:<input type="text" name="email" size="50"><br/>
<br />
CONTACT NUMBER:<input type="text" name="phone" size="20"><br/>
<br />
MOBILE:<input type="text" name="mobile" size="11"><br/>
<br />
<hr/>
<h2> BANK DETAILS</h2>
YOUR DESIGNATION:<input type="text" name="desg" size="30"><br/>
<br />
YOUR STATUS:
<select name="status">
<option value="">CHOOSE</option>
<option value="A">ACTIVE</option>
<option value="T">TRANSFERRED</option>
<option value="D">DELETED</option>
</select><br/>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sister';   
$dbname = 'login';
//echo "hello";
// make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('could not connect: ' . mysql_error());
}
else
//echo "<BR>connected";
//select database to use
$conn = mysql_select_db ($dbname);
//echo "<BR>connected to db" ;

$result = mysql_query("SELECT brcode,brname,braddr FROM branch")or die(mysql_error());
$num_rows = mysql_num_rows($result);
//echo "<BR>" . $num_rows;

echo "<BR>SELECT THE BRANCH ";


echo "<select class='brclass' name='brname' >\n" ;
   echo "<option value='none'>Please Seclect</option>'\n";
   while ($row = mysql_fetch_object($result))
   { 
   echo "<option value='$row->brname'>$row->brname</option>\n"; 
   }

   echo "</select>\n";
?>
<br/>
<br/>
USERLEVEL:
<select name="level">
<option value="">CHOOSE</option>
<option value="1">DATA ENTERER</option>
<option value="2">AUTHORIZER</option>
</select><br/>

<hr/>
<h2> LOGIN DETAILS</h2>
USERID(used for login):<input type="text" size="10" maxlength="10" name="uid"><br /> 
<br/>
PASSWORD:<input type="password" size="12" maxlength="36" name="pwd"><br />
<br />

RETYPE PASSWORD:<input type="password" size="12" maxlength="36" name="rpwd"><br /> 
<br/>
<input type="submit"  name="submit"><br/>
</fieldset>
</center>
</form>
</body>
</html>