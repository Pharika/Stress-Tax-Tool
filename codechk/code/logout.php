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

$query = mysql_query("SELECT * FROM userlog WHERE userid='$username'");
while ($row = mysql_fetch_array($query))
      {
           if($row['end_date_time']==NULL)
             {
               mysql_query("UPDATE userlog set end_date_time=NOW()  WHERE userid='$username'")
              or die("Error: ".mysql_error()); 
               echo "<BR>" . "y0 inserted";
             }
     }


session_destroy();
header("Location:http://localhost/loginfrm.php");
?>