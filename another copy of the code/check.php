<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sister';   
$dbname = 'login';
echo "hello";
// make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('could not connect: ' . mysql_error());
}
else
echo "connected";
//select database to use
$conn = mysql_select_db ($dbname);
echo "connected to db" ;
$query = mysql_query("SELECT * FROM users");
while ($row = mysql_fetch_array($query))
{
echo $row['username'] . " " . $row['password'] ;
}

?>