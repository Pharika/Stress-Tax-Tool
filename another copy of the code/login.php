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
$conn = mysql_select_db ($dbname);

$_SESSION['username']=$username = $_POST['uname'];
$password=$_POST['pwd'];

$query = mysql_query("SELECT * FROM users WHERE username='$username'");
$row = mysql_fetch_array($query);

if (!empty($username) || !empty($password))
{
    if($row['username']==$username && $row['password']==$password)
        {
             mysql_query("INSERT INTO userlog(userid,start_date_time) VALUES( '$username' ,NOW()) ")
              or die("Error: ".mysql_error()); 
           header("Location:http://localhost/logged.php");
               echo "logged";
          }
      else
           {
              echo"User Name Does not exist";
              echo "<BR>" . "Register to log in";
           }
}
else
           {
              echo"User Name  or Password is blank";
              echo "<BR>" ."please check";
           }
?>                 

</fieldset>
</center>
</body>
</html>