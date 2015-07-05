<html> 
<head> 
<title>modify</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<body> 
<form method="post" action="modify4.php">
<center>
<fieldset>

<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sister';   
$dbname = 'login';

//make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('could not connect: ' . mysql_error());
}
else

//select database to use
$conn = mysql_select_db($dbname);

$pram1=$_GET['parameter1'];
$pram2=$_GET['parameter2'];
$pram3=$_GET['parameter3'];
$pram4=$_GET['parameter4'];
$pram5=$_GET['parameter5'];
$pram6=$_GET['parameter6'];
$pram7=$_GET['parameter7'];
$pram8=$_GET['parameter8'];
$pram9=$_GET['parameter9'];
$pram10=$_GET['parameter10'];
$pram11=$_GET['parameter11'];
$pram12=$_GET['parameter12'];
$pram13=$_GET['parameter13'];
$pram14=$_GET['parameter14'];
$unme=$_SESSION['uname'];
//echo "<BR>" . $unme;

if(isset($pram1) && isset($pram2) && isset($pram3))
{
echo "<BR>" . "YOUR FULL NAME is " . $pram1 . $pram2 . $pram3;
echo "<BR>" . "ENTER NEW NAME:";
echo "<BR>" . "FIRSTNAME:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"fname\">\n" . "<BR>";
echo "<BR>" . "MIDDLENAME:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"mname\">\n" . "<BR>";
echo "<BR>" . "LASTNAME:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"lname\">\n" . "<BR>";
}
if(isset($pram4))
{
echo "<BR>" . "YOUR EMAIL ID  is " . $pram4;
echo "<BR>" . "ENTER NEW EMAIL  ID:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"email\">\n" . "<BR>";
}
if(isset($pram5) && isset($pram7) && isset($pram8))
{
echo "<BR>" . "YOUR ADDRESS is " . $pram5 ."," .  $pram6. "," .$pram7 ."," .$pram8;
echo "<BR>" . "ENTER NEW ADDRESS:";
echo "<BR>" . "ADDRESS1:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"add1\">\n" . "<BR>";
echo "<BR>" . "ADDRESS2:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"add2\">\n" . "<BR>";
echo "<BR>" . "CITY:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"city\">\n" . "<BR>";
echo "<BR>" . "ZIPCODE:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"zip\">\n" . "<BR>";
}
if(isset($pram9) && isset($pram10))
{
echo "<BR>" . "YOUR PHONE No: is " . $pram9;
echo "<BR>" . "YOUR MOBILE No: is " . $pram10;
echo "<BR>" . "ENTER NEW NUMBERS:";
echo "<BR>" . "PHONE:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"phone\">\n" . "<BR>";
echo "<BR>" . "MOBILE:" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"mobile\">\n" . "<BR>";
}
if(isset($pram11))
{
echo "<BR>" . "YOUR DESIGNATION  is " . $pram11;
echo "<BR>" . "ENTER DESIGNATION :" . "\t<input type=\"text\" size=\"20\" maxlength=\"20\" name=\"desg\">\n" . "<BR>";
}
if(isset($pram12))
{
echo "<BR>" . "YOUR STATUS  is " . $pram12;
echo "<BR>" . "ENTER DESIGNATION :" . "\t<select name=\"status\">
<option value=\"\">CHOOSE</option>
<option value=\"A\">ACTIVE</option>
<option value=\"T\">TRANSFERRED</option>
<option value=\"D\">DELETED</option>
</select><br/>\n" . "<BR>";
}
if(isset($pram13))
{
echo "<BR>" . "YOUR USERLEVEL is " . $pram13;
echo "<BR>" . "ENTER USERLEVEL :" . "\t<select name=\"ustatus\">
<option value=\"\">CHOOSE</option>
<option value=\"1\">DATAENTERER</option>
<option value=\"2\">AUTHORIZER</option>

</select><br/>\n" . "<BR>";;
}
if(isset($pram14))
{
echo "<BR>" . "YOUR USERNAME is " . $unme;
echo "<BR>" . "RETYPE OLD PASSWORD:" . "\t<input type=\"password\" size=\"12\" maxlength=\"36\" name=\"repwd\">\n" . "<BR>";
echo "<BR>" . "ENTER NEW PASSWORD:" . "\t<input type=\"password\" size=\"12\" maxlength=\"36\" name=\"npwd\">\n". "<BR>";
echo "<BR>" . "RENTER NEW PASSWORD:" . "\t<input type=\"password\" size=\"12\" maxlength=\"36\" name=\"rpwd\">\n". "<BR>";

}

?>
<br/>
<input type="submit" name="submit" value="save">
</fieldset>
</center>
</form>
</body>
</html>