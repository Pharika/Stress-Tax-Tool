<html> 
<head>
<title>AUTHORIZE</title> 
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
<legend>CHECK AND AUTHORIZE</legend>
<form method="post" action="authorized.php">

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

$trns=$_GET['trn'];
$_SESSION['transid']=$trns;

$query = mysql_query("SELECT * FROM transac");

while($row = mysql_fetch_array($query))
{
 if ($row['transid']==$trns)
           {
                   echo "<BR>TRANSACTION NUMBER:" . $row['transid'] . "<BR>";
                   echo "<BR>TYPE OF TAX:" . $row['taxname'] . "<BR>";
                   echo "<BR>FORM NO:" .  $row['formno']  . "<BR>"; 
                   echo "<BR>ACCOUNT ID :" .  $row['actid']   . "<BR>"; 
                    echo "<BR>BRANCH CODE:" .  $row['brcode']  . "<BR>";
                    echo  ".....................................................................................";        
                   echo "<BR>TIN/RC NO :" .  $row['tin_rcno'] . "<BR>"; 
                   echo "<BR>DEALER NAME:" . $row['dealer_name']  . "<BR>"; 
                   echo  ".....................................................................................";        
                   echo "<BR>FROM DATE:" .  $row['from_date']  . "<BR>";
                   echo "<BR>TO DATE:" .  $row['to_date']  . "<BR>";
                   echo "<BR>TRANSACTION DATE:" .  $row['trans_date']  . "<BR>";
                   echo "<BR>CHALLAN  DATE:" .  $row['challan_date']  . "<BR>";
                  echo  ".....................................................................................";        
                  echo "<BR>TRANSACTION MODE:" .  $row['transmode']  . "<BR>";
                   echo "<BR>AMOUNT:" . $row['amount'] . "<BR>";
                  echo  ".....................................................................................";   
                  echo "<BR>CREATED BY:" . $row['created_by'] . "<BR>";
                 echo "<BR>STATUS:" . $row['status'] . "<BR>";
                  echo  "....................................................................................." . "<BR>";   
              }
}
?>

<input type="Submit" name="submit" value="AUTHORIZE" >
</form>
<form method="post"   action ="reject.php">
<input type="Submit" name="submit" value="REJECT" >
</form>    
</fieldset>
</center>
</body>
</html>