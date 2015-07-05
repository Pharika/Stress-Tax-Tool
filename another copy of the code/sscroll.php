<html> 
<head><title>SUB SCROLL</title></head> 
<body> 

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

$taxnme=$_GET['taxn'];
$taxid=$_GET['taxid'];
$actid=$_GET['act'];
$brcode=$_SESSION['brcode'];


$gdate=$_SESSION['gdate'];
$trdate=explode("-" , $gdate);

$query = mysql_query("SELECT * FROM transac where trans_date='$gdate' and status='A' and taxname='$taxnme'") or die(mysql_error());
$row = mysql_fetch_array($query);
$num_rows = mysql_num_rows($query);

$result= mysql_query("SELECT * FROM transac where trans_date='$gdate' and status='A' and taxname='$taxnme'") or die(mysql_error());

$result2=mysql_query("SELECT * FROM branch  where brcode='$brcode' ") or die(mysql_error());
$brow = mysql_fetch_array($result2);
$brname=$brow['brname'];

$query3=mysql_query("SELECT * FROM sysparam where process_date='$gdate' ") or die(mysql_error());
$row3= mysql_fetch_array($query3);
$msc=$row3['main_scrollno'];
$ssc=$row3['sub_scrollno'];

$amt=0;

$query2= mysql_query("SELECT amount FROM transac where trans_date='$gdate' and status='A' and taxname='$taxnme'") or die(mysql_error());
while($row2 = mysql_fetch_array($query2))
 {
    $amt = $amt + $row2['amount'];
   }

$subscllno=1;

// scroll output
echo  "<BR>"."BSCR" . "$" . "<BR>";
echo "MSCR" . "$" . "STATE BANK OF HYDERABAD" . "$". "011". "$" . $trdate[0] . $trdate[1] . $trdate[2] . "$" . $msc . "$" .  $subscllno . "$" . $actid . "$" . $amt  . "<BR>";
echo "SSCR" . "$" .$msc . "$" .$actid . "$" . $brname ."$" . "011".$brcode . "$" . $trdate[0] . $trdate[1] . $trdate[2] . "$" . $ssc . "$" . $num_rows . "$" . $amt . "<BR>"; while($rrow = mysql_fetch_array($result))
while($rrow=mysql_fetch_array($result))
{
 $bsr="011" . $row['brcode'] . $trdate[2] . $trdate[1] . $trdate[0] . $rrow['transid'];
echo "CHLN" . "$" . $ssc . "$" . $actid . "$" . $bsr . "$" . $rrow['tin_rcno'] . "$" . $rrow['dealer_name'] . "$" . $rrow['challan_date'] . "$" . $rrow['from_date'] . "$" . $rrow['to_date'] . "$" . $rrow['amount'] . "$" . "Y" . "<BR>"; 
}
echo "VALD" . "$" . $ssc . "$" . $num_rows . "$" .$amt . "<BR>";
echo "ESCR"  . "$";
       
?>
</body>
</html>
