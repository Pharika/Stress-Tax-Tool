<html> 
<head> 
<title>ACCOUNT INFO PAGE</title> 
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
<legend>YOUR PROFILE DETAILS</legend>

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
//echo "connected to db" ;

$username=$_SESSION['username'];

$query = mysql_query("SELECT * FROM users WHERE username='$username'");
$row = mysql_fetch_array($query);

//displaying all  details: 
if($row['username']==$username)
{

                     echo "<BR>";
                     echo "<BR>.......................................................................";
                     echo"<BR> PERSONEL DETAILS";  
                     echo "<BR>.......................................................................";
                      echo "<BR>"; 
 
                     echo "<BR>NAME:" . $row['firstname'] ." " . $row['middlename'] ." " . $row['lastname'];             
                     echo "<BR> ADDRESS:" . $row['address1'] . "," . $row['address2'] ."," . $row['city'] . "," . $row['zip'] . ",". $row['state'] ;
                     echo "<BR> EMAIL:" . $row['email'];
                     echo "<BR> PHONE:" . $row['phone'];
                     echo "<BR> MOBILE:" . $row['mobile'];
                     echo "<BR>";
                     echo "<BR>.......................................................................";
                     echo"<BR> BANK DETAILS";  
                     echo "<BR>......................................................................."; 
                     echo "<BR>";
                     echo "<BR> DESIGNATION	:" . $row['designation'];
                      echo "<BR> STATUS:" . $row['status'];
                      echo "<BR>";
                     echo "<BR>.......................................................................";
                     echo"<BR> LOGIN DETAILS";   
                     echo "<BR>.......................................................................";
                     echo "<BR>";
                     echo "<BR> USERLEVEL:" . $row['userlevel'];
                     echo "<BR> USERID(for login in):" . $row['username'];
  }
?>

</fieldset>
</center>
</body>
</html>