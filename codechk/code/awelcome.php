<html> 
<head> 
<title>AUTHORIZER's  WELCOME PAGE</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<body> 
</br></br></br></br>
<center>
<fieldset>

<?php
session_start();
$username=$_SESSION['username'];
?>

CHECK YOUR ACCOUNT:</br>
<a href="http://localhost/accountinfo.php"  target="_self">account</a></br>
CHANGE YOUR PASSWORD:</br>
<a href="http://localhost/changepwd.php"  target="_self">change password</a></br>
ENTER THE DATA:</br>
<a href="http://localhost/datacheck.php"  target="_self">dataentry</a></br>
AUTHORIZE THE DATA:</br>
<a href="http://localhost/authorize.php"  target="_self">authorize</a></br>
REPORT  GENERATION:</br>
<a href="http://localhost/report.php"  target="_self">report</a></br>
ESCROLL  GENERATION:</br>
<a href="http://localhost/escroll.php"  target="_self">escroll</a></br>
USER ADMIN:</br>
<a href="http://localhost/uadmin.php"  target="_self">user admin</a></br>
</fieldset>
</center>
</body>
</html>
