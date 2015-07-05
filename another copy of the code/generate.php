<html> 
<head>
<title>GENERATING THE RECORD LISTS</title>
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

$gdate="{$_POST['year']}-{$_POST['month']}-{$_POST['day']}";

$query = mysql_query("SELECT * FROM transac");

echo "<BR>" ."RECORDS ENTERED ON:"   . $gdate;

while($row = mysql_fetch_array($query))
{
 
    if ($row['trans_date']==$gdate && $row['status']=='E')
                     {
                      $trns=$row['transid'];
                      echo "<BR>";
                       
                        print "\t<font face=arial size=2/> <a href=\"http://localhost/edetails.php?trn=$trns\" target=\"_self\">$trns</a> </font>\n";
                         
                        } 
}
$query1= mysql_query("SELECT * FROM transac");
echo "<BR>" ."RECORDS AUTHORIZED ON:"   . $gdate;
while($row = mysql_fetch_array($query1))
{
                   if($row['trans_date']==$gdate && $row['status']=='A')
                        {
                            $trns=$row['transid'];
                            echo "<BR>";
                            print "\t<font face=arial size=2/> <a href=\"http://localhost/edetails.php?trn=$trns\" target=\"_self\">$trns</a> </font>\n";                          
                          }
}
$query2= mysql_query("SELECT * FROM transac");
echo "<BR>" ."RECORDS REJECTED ON:"   . $gdate;
  while($row = mysql_fetch_array($query2))
{
                   if($row['trans_date']==$gdate && $row['status']=='R')
                        {
                           $trns=$row['transid'];
                            echo "<BR>";             
                          print "\t<font face=arial size=2/> <a href=\"http://localhost/edetails.php?trn=$trns\" target=\"_self\">$trns</a> </font>\n";
                            
                         }
              
}
?>

</fieldset>
</center>
</body>
</html>