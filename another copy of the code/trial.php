<html> 
<head> 
<title>REGISTERED</title> 
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

// make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('could not connect: ' . mysql_error());
}
else

//select database to use
$conn = mysql_select_db($dbname);

$username=$_SESSION['unm'];
$password=$_SESSION['password'];
$email=$_SESSION['email'];
$fname=$_SESSION['fname'];
$mname=$_SESSION['mname'];
$lname=$_SESSION['lname'];
$gender=$_SESSION['gender'];
$dob=$_SESSION['dob'];
$add1=$_SESSION['add1'];
$add2=$_SESSION['add2'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];
$zip=$_SESSION['zip'];
$ph=$_SESSION['phone'];
$ph2=$_SESSION['mobile'];
$desg=$_SESSION['desg'];
$status=$_SESSION['status'];
$bcode=$_SESSION['brcode'];
$ulevel=$_SESSION['userlevel'];


mysql_query("INSERT  INTO users(username,password,email,firstname,lastname,middlename,gender,dob,address1,address2,city,state,zipcode,phone,mobile,designation,status,brcode,userlevel)  VALUES('$username','$password','$email','$fname','$lname','$mname','$gender','$dob','$add1','$add2','$city','$state','$zip','$ph','$ph2','$desg','$status','$bcode','$ulevel')");
                echo "<BR>SUCCESFULLY REGISTERED";

?>
</fieldset>
</center>
</body>
</html>