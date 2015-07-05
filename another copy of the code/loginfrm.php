<html> 
<head> 
<title>LOGIN PAGE</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head>

<div  align="center">
<?php
echo  '<font size="6">' . "WELCOME TO STATE BANK OF HYDERABAD" . '</font>' . "<BR>" ;
?>
</div>

<body> 
<form method="post" action="login.php">
<br/>
<center>
<fieldset>
<legend>LOGIN</legend>

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
?>

<br/>
USERNAME:<input type="text" size="12" maxlength="12" name="uname"><br />
<br/>
 PASSWORD:<input type="password" size="12" maxlength="36" name="pwd"><br />
<br/>
<input type="submit"  name="submit"><br/>
</fieldset>
</center>
</form>
</body>
</html>
