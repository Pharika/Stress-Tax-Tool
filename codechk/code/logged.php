<?php
session_start();
echo "new page";
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

$conn = mysql_select_db($dbname);

$username=$_SESSION['username'];
echo "<BR>" . $username;

$query = mysql_query("SELECT * FROM users WHERE username='$username'");
$row = mysql_fetch_array($query);

echo "<BR>" . $row['userlevel'];
$_SESSION['brcode']=$row['brcode'];

if($row['userlevel']==1)
{ 
header("Location:http://localhost/frme.php");
}
else
{
header("Location:http://localhost/frme1.php");
}
?>