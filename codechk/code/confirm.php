<html> 
<head>
<title>CONFIRM</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style
</head> 
<body> 
<center>
<fieldset>
<legend>CHECK YOU ENTERIES AND CONFIRM</legend>
<form method="post" action="forminsert.php">

<?php
session_start();
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

$tax=$_SESSION['tname'];
$formno=$_SESSION['form'];
$actid=$_SESSION['acc'];
$_SESSION['tin']=$tin_rcno=$_POST['tin'];
$_SESSION['dname']=$dname=$_POST['dname'];
$_SESSION['fdate']=$fromdate="{$_POST['year2']}-{$_POST['month2']}-{$_POST['day2']}"; 
$_SESSION['todate']=$todate="{$_POST['year3']}-{$_POST['month3']}-{$_POST['day3']}"; 
$transdate=$_SESSION['tdate'];
$_SESSION['tdate']=$transdate;
$_SESSION['cdate']=$challandate="{$_POST['year1']}-{$_POST['month1']}-{$_POST['day1']}"; 
$_SESSION['tmode']=$transmode=$_POST['tmode'];
$_SESSION['amount']=$amount=$_POST['amtfig'];
$brcode=$_SESSION['brcode'];
$username=$_SESSION['username'];

$query = mysql_query("SELECT * FROM transac");
$row = mysql_fetch_array($query);

if(empty($tin_rcno) || empty($amount) || empty($transdate) || empty($transmode)  )
    {
      echo "INCOMPLETE FIELDS ..GO BACK TO COMPLETE" . "<BR>";

     }
else
   {
       if ($row['dealer_name']!=$dname)
           {
                   echo "<BR>TRANSACTION DATE:" . $transdate . "<BR>" ;
                   "<BR>";
                   echo "<BR>TYPE OF TAX:" . $tax . "<BR>";
                   echo "<BR>FORM NO:" . $formno . "<BR>"; 
                   echo "<BR>ACCOUNT ID :" . $actid  . "<BR>"; 
                    echo "<BR>BRANCH CODE:" . $brcode . "<BR>";
                    echo  ".....................................................................................";        
                   echo "<BR>TIN/RC NO :" . $tin_rcno . "<BR>"; 
                   echo "<BR>DEALER NAME:" . $dname . "<BR>"; 
                   echo  ".....................................................................................";        
                   echo "<BR>FROM DATE:" . $fromdate . "<BR>";
                   echo "<BR>TO DATE:" . $todate . "<BR>";
                   
                   echo "<BR>CHALLAN  DATE:" . $challandate . "<BR>";
                  echo  ".....................................................................................";        
                  echo "<BR>TRANSACTION MODE:" . $transmode . "<BR>";
                   echo "<BR>AMOUNT:" . $amount . "<BR>";
                  echo  ".....................................................................................";   
                  echo "<BR>CREATED BY:" . $username . "<BR>";
                  echo  "....................................................................................." . "<BR>";   
              }
else 
      {
           echo "<BR>" ."dealer already exists";
      }
}

?>
                   
<input type="Submit" name="submit" value="Submit">
</form>
<form method="post"   action ="form.php">
<input type="Submit" name="back" value="back">
</form>    
</fieldset>
</center>
</body>
</html>