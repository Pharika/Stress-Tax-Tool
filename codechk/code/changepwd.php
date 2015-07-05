<html> 
<head> 
<title>CHANGE PASSWORD</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<body> 
<form method="post" action="pwdchnged.php">
<center>
<fieldset>

<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sister';   
$dbname = 'login';

// make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('could not connect: ' . mysql_error());
}
else

//select database to use
$conn = mysql_select_db ($dbname);

$username=$_SESSION['username'];
echo "<BR>" . "USERNAME:" . $username;
?>

</br>
 RETYPE OLD PASSWORD:<input type="password" size="12" maxlength="36" name="repwd"><br />
<br/>
 ENTER NEW PASSWORD:<input type="password" size="12" maxlength="36" name="npwd"><br />
<br/>
RENTER NEW PASSWORD:<input type="password" size="12" maxlength="36" name="rpwd"><br />
<br/>
<input type="submit"  name="submit"><br/>

</fieldset>
</center>
</form>
</body>
</html>

