<html> 
<head>
<title>FORM INSERT</title> 
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
if (isset($_POST['submit']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sister';   
$dbname = 'login';

//make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('could not connect: ' . mysql_error());
}
else

//select database to use

$conn = mysql_select_db($dbname);
echo "<BR>connected to db" ;

$tax=$_SESSION['tname'];
$formno=$_SESSION['form'];
$actid=$_SESSION['acc'];
$status="E";
$tin_rcno=$_SESSION['tin'];
$dname=$_SESSION['dname'];
$fromdate=$_SESSION['fdate'];
$todate=$_SESSION['todate'];
$transdate=$_SESSION['tdate'];
$challandate=$_SESSION['cdate'];
$tmode=$_SESSION['tmode'];
$amount=$_SESSION['amount'];
$brcode=$_SESSION['brcode'];
$username=$_SESSION['username'];

//inserting the confrimed values into the table transac
mysql_query("INSERT  INTO transac(taxname,formno,actid,tin_rcno,dealer_name,from_date,to_date,trans_date,challan_date,amount,transmode,created_by,brcode,status)  VALUES('$tax','$formno','$actid','$tin_rcno','$dname','$fromdate','$todate','$transdate','$challandate','$amount','$tmode','$username','$brcode','$status')");
$trnsid=mysql_insert_id();           

echo "<BR>TRANSACTION No:" . $trnsid;
echo "<BR>FORM HAS BEEN INSERTED ";

//selecting the max value of main scrollno and sub scroll  number
$query1=mysql_query("SELECT MAX(main_scrollno), MAX(sub_scrollno) FROM sysparam");
$row1=mysql_fetch_array($query1);
$mscrl=$row1['MAX(main_scrollno)'];
$sscrl=$row1['MAX(sub_scrollno)'];

//query to select the last row of the sysparam table
$query2=mysql_query("select * from sysparam order by processid desc limit 1");
$row2=mysql_fetch_array($query2);   
$pdate=$row2['process_date'];

$query=mysql_query("SELECT * FROM sysparam");
$row=mysql_fetch_array($query);
$ppdate=$row['process_date'];

if ($ppdate==NULL)
      {
             mysql_query("INSERT  INTO sysparam(process_date,main_scrollno,sub_scrollno)  VALUES('$transdate',1001,1001)");
       }

   elseif($pdate!=$transdate)
       {
                 $mscrl=$mscrl+1 ;
                 $sscrl=$sscrl+1;
                 mysql_query("INSERT  INTO sysparam(process_date,main_scrollno,sub_scrollno)  VALUES('$transdate','$mscrl','$sscrl')");
       }
}
?>
</fieldset>
</center>
</body>
</html>
