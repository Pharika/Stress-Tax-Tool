<html>
<head> 
<title>SCROLLS</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<body> 
<center>
<fieldset>
<legend>click on the required link to make changes</legend>

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

$_SESSION['uname']=$uname=$_POST['uname'];

$result = mysql_query("SELECT * FROM users WHERE username='$uname'") or die(mysql_error());
$row = mysql_fetch_array($result);

$fnme=$row['firstname'];
$mnme=$row['middlename'];
$lnme=$row['lastname'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter1=$fnme & parameter2=$mnme & parameter3=$lnme\" target=\"_blank\">CHANGE NAME</a> </font>\n" . "<BR>"; 
$email=$row['email'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter4=$email\" target=\"_blank\">CHANGE EMAIL</a> </font>\n" . "<BR>";
$address1=$row['address1'];
$address2=$row['address2'];
$city=$row['city'];
$zipcode=$row['zipcode'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter5=$address1 & parameter6=$address2 & parameter7=$city & parameter8=$zipcode\" target=\"_blank\">CHANGE ADDRESS</a> </font>\n" . "<BR>";
$phone=$row['phone'];
$mobile=$row['mobile'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter9=$phone & parameter10=$mobile\" target=\"_blank\">CHANGE PHONE NUMBERS</a> </font>\n" . "<BR>";
$desg=$row['designation'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter11=$desg\" target=\"_blank\">CHANGE DESIGNATION</a> </font>\n" . "<BR>";
$status=$row['status'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter12=$status\" target=\"_blank\">CHANGE STATUS</a> </font>\n" . "<BR>";
$usrlvl=$row['userlevel'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter13=$usrlvl\" target=\"_blank\">CHANGE USERLEVEL</a> </font>\n" . "<BR>";
$pwd=$row['password'];
print "<BR>" ."\t<font face=arial size=2/> <a href=\"http://localhost/modify3.php? parameter14=$pwd\" target=\"_blank\">CHANGE  PASSWORD</a> </font>\n" . "<BR>";
?>

</fieldset>
</center>
</body>
</html>
