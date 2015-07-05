<html> 
<head><title>Report</title></head> 
<body> 
<div align="center">

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
//echo "<BR>connected to db" ;

$gdate="{$_POST['year']}-{$_POST['month']}-{$_POST['day']}";
echo " REPORT  FOR THE DAY:" . $gdate;
echo "<BR>.........................................................................................................................................................................................................................................................................................................................................................................................................................................................."  ;
print "<table width=1500>\n";
  print "<tr>\n";
                print "\t<td WIDTH=100><font face=arial size=4/>S.No</font></td\n";
                print "\t<td WIDTH=250><font face=arial size=4/>CIN</font></td\n";
                print "\t<td WIDTH=100><font face=arial size=4/>MODE</font></td\n"; 
                print "\t<td WIDTH=200><font face=arial size=4/>TIN/RC no:</font></td\n"; 
                print "\t<td WIDTH=350><font face=arial size=4/>NAME OF DEALER</font></td\n"; 
                print "\t<td WIDTH=250><font face=arial size=4/>FROM DATE</font></td\n"; 
                print "\t<td WIDTH=250><font face=arial size=4/>TO DATE</font></td\n"; 
                print "\t<td WIDTH=200><font face=arial size=4/>AMOUNT</font></td\n"; 
      print "</tr>\n"; 
print "</table>\n";  
echo ".........................................................................................................................................................................................................................................................................................................................................................................................................................................................."  ;
$query = mysql_query("SELECT * FROM transac");
print "<table width=1500>\n";  
$i=1;
$amt=0;
while($row = mysql_fetch_array($query))
{
    if ($row['trans_date']==$gdate && $row['status']=='A')
                     {
                       $trdate=explode("-" , $gdate);
                       $bsr="011" . $row['brcode'] . $trdate[2] . $trdate[1] . $trdate[0] . $row['transid'];
                       $dnme=$row['dealer_name'];
                       $trans=$row['transmode'];
                       $tin=$row['tin_rcno'];
                       $fdate=$row['from_date'];
                       $tdate=$row['to_date'];
                       $amount=$row['amount'];
                       $amt=$amt + $amount;
                       print "<tr>\n";
                       print "\t<td WIDTH=100><font face=arial size=2/>$i</font></td>\n"; 
                       print "\t<td WIDTH=250><font face=arial size=2/>$bsr</font></td>\n";  
                       print "\t<td WIDTH=100><font face=arial size=2/>$trans</font></td>\n"; 
                       print "\t<td WIDTH=200><font face=arial size=2/>$tin</font></td>\n"; 
                       print "\t<td WIDTH=350><font face=arial size=2/>$dnme</font></td>\n"; 
                       print "\t<td WIDTH=250><font face=arial size=2/>$fdate</font></td>\n"; 
                       print "\t<td WIDTH=250><font face=arial size=2/>$tdate</font></td>\n"; 
                       print "\t<td WIDTH=200><font face=arial size=2/>$amount</font></td>\n"; 
                        print "</tr>\n";
                          $i++;                     
                        } 

}
print "</table>\n";  
echo "<BR>" . "TOTAL AMOUNT:" . $amt;
?>
</div>
</body>
</html>