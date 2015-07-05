<html> 
<head> 
<title>PASSWORD CHECK</title> 
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
$repwd=$_POST['repwd'];
$npwd=$_POST['npwd'];
$rpwd=$_POST['rpwd'];

$query = mysql_query("SELECT password FROM users WHERE username='$username'");
$row = mysql_fetch_array($query);
if($row['password']==$repwd)
{
  if(!empty($repwd) && !empty($npwd) && !empty($rpwd))
    {
          if($rpwd ==$npwd)
           {
              mysql_query("UPDATE users SET password='$npwd' where username='$username'");
              echo "<BR>PASSWORD HAS BEEN CHANGED";
            }
      else 
           {
                    echo "<BR>" . "PASSWORDS ARE NOT SAME ";
                    echo "<BR>" . "PLEASE CHECK ";
             }
    }
   else
          {
            echo "<BR>" . "PLEASE CHECK  THE FEILDS";
         }
}
?>

</fieldset>
</center>
</body>
</html>