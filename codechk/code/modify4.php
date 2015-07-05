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

$unme=$_SESSION['uname'];
$fnme=$_POST['fname'];
$mnme=$_POST['mname'];
$lnme=$_POST['lname'];
$email=$_POST['email'];
$addr1=$_POST['add1'];
$addr2=$_POST['add2'];
$city=$_POST['city'];
$zipcode=$_POST['zip'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$desg=$_POST['desg'];
$status=$_POST['status'];
$userl=$_POST['ustatus'];
$repwd=$_POST['repwd'];
$npwd=$_POST['npwd'];
$rpwd=$_POST['rpwd'];

if(!empty($fnme))
{
mysql_query("UPDATE users SET firstname='$fnme' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "FIRSTNAME HAS BEEN CHANGED";
}
if(!empty($mnme))
{
mysql_query("UPDATE users SET middlename='$mnme' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "MIDDLENAME HAS BEEN CHANGED";
}
if(!empty($lnme))
{
mysql_query("UPDATE users SET lastname='$lnme' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "LASTNAME HAS BEEN CHANGED";
}
if(!empty($email))
{
mysql_query("UPDATE users SET email='$email' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "EMAIL HAS BEEN CHANGED";
}
if(!empty($addr1))
{
mysql_query("UPDATE users SET address1='$addr1' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "ADDRESS1 HAS BEEN CHANGED";
}
if(!empty($addr2))
{
mysql_query("UPDATE users SET address2='$addr2' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "ADDRESS2 HAS BEEN CHANGED";
}
if(!empty($city))
{
mysql_query("UPDATE users SET city='$city' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "CITY HAS BEEN CHANGED";
}
if(!empty($zipcode))
{
mysql_query("UPDATE users SET zipcode='$zipcode' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "ZIPCODE HAS BEEN CHANGED";
}
if(!empty($phone))
{
mysql_query("UPDATE users SET phone='$phone' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "PHONE HAS BEEN CHANGED";
}
if(!empty($mobile))
{
mysql_query("UPDATE users SET mobile='$mobile' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "MOBILE NUMBER HAS BEEN CHANGED";
}
if(!empty($desg))
{
mysql_query("UPDATE users SET designation='$desg' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "DESIGNATION HAS BEEN CHANGED";
}
if(!empty($status))
{
mysql_query("UPDATE users SET status='$status' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "STATUS HAS BEEN CHANGED";
}
if(!empty($userl))
{
mysql_query("UPDATE users SET userlevel='$userl' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "USERLEVEL HAS BEEN CHANGED";
}
if(!empty($repwd))
{
       if($repwd!=$npwd)
          {
               if($npwd==$rpwd)
                  {
         mysql_query("UPDATE users SET password='$npwd' where username='$unme' ") or die(mysql_error());
     echo "<BR>" . "PASSWORD HAS BEEN CHANGED";
                  }
             }
        
}

?>
</fieldset>
</center>
</body>
</html>
