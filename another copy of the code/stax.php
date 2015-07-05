<html> 
<head>
<title>SCROLL TAXES</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<body> 
<center>

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

$gdate="{$_POST['year']}-{$_POST['month']}-{$_POST['day']}";
$_SESSION['gdate']=$gdate;
$result = mysql_query("SELECT taxname,taxdesc,taxid,actid FROM taxtype")or die(mysql_error());
$num_rows = mysql_num_rows($result);
print "<table width=500 border=1>\n";
  print "<tr>\n";
                
                print "\t<td><font face=arial size=4/>Tax Name</font></td\n";
                print "\t<td><font face=arial size=4/>Tax Description</font></td\n"; 
                print "\t<td><font face=arial size=4/>Tax id:</font></td\n"; 
                print "\t<td><font face=arial size=4/>Act ID:</font></td\n"; 
   print "</tr>\n"; 

while($row = mysql_fetch_row($result))
{
    $taxn=$row[0];
    $actid=$row[3];
    $taxid=$row[2];
          print "<tr>\n";
                print "\t<td>";
                print "\t<font face=arial size=2/> <a href=\"http://localhost/sscroll.php?taxn=$taxn & taxid=$taxid & act=$actid \" target=\"_blank\">$row[0]</a> </font>\n";
                print "</td>";
                  print "\t<td><font face=arial size=2/>$row[1]</font></td>\n"; 
                  print "\t<td><font face=arial size=2/>$row[2]</font></td>\n"; 
                  print "\t<td><font face=arial size=2/>$row[3]</font></td>\n"; 
        print "</tr>\n"; 
 }
print "</table>\n";  
?>

</center>
</body> 
</html>