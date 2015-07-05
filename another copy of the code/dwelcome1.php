<html> 
<head> 
<title>DATAENTERERS  WELCOME PAGE</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<div  align="center">
<?php
echo  '<font size="6">' . " STATE BANK OF HYDERABAD" . '</font>' . "<BR>" ;
?>
</div>
<body>
<div  align="right">
<a href="http://localhost/logout.php"  target="_blank">logout</a></br>
</div>

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
$query = mysql_query("SELECT firstname,lastname,middlename,brcode FROM users WHERE username='$username'");
$row = mysql_fetch_array($query);
echo "Welcome " ."  " .$row['firstname'] . " " . $row['middlename'] ." " . $row['lastname'] ;
$_SESSION['brcode']=$brcode=$row['brcode'];
$query2 = mysql_query("SELECT brname FROM branch WHERE brcode='$brcode'");
$row2= mysql_fetch_array($query2);
echo "<BR>" ."BRANCH:" ." " . $row2['brname'];
?>
<body>
</html>