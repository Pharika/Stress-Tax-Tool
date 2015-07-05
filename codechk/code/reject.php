<html> 
<head> 
<title>REJECT</title> 
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

<?php
session_start();
if (isset($_POST['submit']))
{
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

$username=$_SESSION['username'];
$transid=$_SESSION['transid'];

$query = mysql_query("SELECT * FROM transac");
$row = mysql_fetch_array($query);
if ($row['created_by']!=$username)
{
   mysql_query("UPDATE transac SET status = 'R' ,  authorized_by = '$username'   WHERE  transid= '$transid' ");
   echo "<BR>" . "rejected";
}
}
?>

</fieldset>
</center>
</body>
</html>
