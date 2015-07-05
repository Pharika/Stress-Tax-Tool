<html> 
<head>
<title>TAXES</title>
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

$result = mysql_query("SELECT taxtype.taxtypeid,taxname,taxdesc,taxid,group_concat(formno),actid,taxtype.status as formnum  FROM taxtype,taxform where taxtype.taxtypeid=taxform.taxtypeid group by taxtypeid")or die(mysql_error());
$num_rows = mysql_num_rows($result);

print "<table width=500 border=1>\n";
  print "<tr>\n";
                
                print "\t<td><font face=arial size=4/>Tax Name</font></td\n";
                print "\t<td><font face=arial size=4/>Tax Description</font></td\n"; 
                print "\t<td><font face=arial size=4/>Tax ID</font></td\n"; 
                print "\t<td><font face=arial size=4/>Challan No :</font></td\n"; 
                print "\t<td><font face=arial size=4/>Act ID:</font></td\n"; 
                print "\t<td><font face=arial size=4/>Status</font></td\n"; 
  print "</tr>\n"; 

while($row = mysql_fetch_row($result))
{
     print "<tr>\n";
                print "\t<td><font face=arial size=2/>$row[1]</font></td>\n";  
                print "\t<td><font face=arial size=2/>$row[2]</font></td>\n"; 
                print "\t<td><font face=arial size=2/>$row[3]</font></td>\n"; 
          
                $forms=explode(",",$row[4]);
               $size= count($forms);
     print "\t<td>";

     for ($i=0;$i<$size;$i++)
                   {
                       print "\t<font face=arial size=2/> <a href=\"http://localhost/form.php?tname=$row[1] & form=$forms[$i] & acc=$row[5]\" target=\"_self\">$forms[$i]</a> </font>\n";
                   }

      print "</td>";
                print "\t<td><font face=arial size=2/>$row[5]</font></td>\n"; 
                print "\t<td><font face=arial size=2/>$row[6]</font></td>\n"; 
      print "</tr>\n"; 
 }
print "</table>\n";  

?>

ADD  A NEW TAX
<a href="http://localhost/newtax.php"  target="_self">NEW TAX</a>
<center>
</body> 
</html>
