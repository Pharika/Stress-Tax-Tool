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
<body> 
<br/><br/><br/>
<center>
<fieldset>

<?php
session_start();
$username=$_SESSION['username'];
$brcode=$_SESSION['brcode'];
$_SESSION['brcode']=$brcode;
?>

CHECK YOUR ACCOUNT:</br>
<a href="http://localhost/accountinfo.php"  target="_self">account</a></br>
CHANGE YOUR PASSWORD:</br>
<a href="http://localhost/changepwd.php"  target="_self">change password</a></br>
ENTER THE DATA:</br>
<a href="http://localhost/datacheck.php"  target="_self">dataentry</a></br>
</fieldset>
</center>
</body>
</html>