<html> 
<head> 
<title>REGISTER DETAILS</title> 
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
<legend>CHECK YOUR DETAILS AND CONFIRM</legend>

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

$query = mysql_query("SELECT * FROM users");
$row = mysql_fetch_array($query);

$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];


$_SESSION['unm']=$username=$_POST['uid'];
$_SESSION['password']=$password=$_POST['pwd'];
$_SESSION['email']=$email=$_POST['email'];
$_SESSION['fname']=$fname=$_POST['fname'];
$_SESSION['mname']=$mname=$_POST['mname'];
$_SESSION['lname']=$lname=$_POST['lname'];
$_SESSION['dob']=$dob="{$_POST['year']}-{$_POST['month']}-{$_POST['day']}"; 
$_SESSION['gender']=$gender=$_POST['gender'];
$_SESSION['add1']=$add1=$_POST['add1'];
$_SESSION['add2']=$add2=$_POST['add2'];
$_SESSION['city']=$city=$_POST['city'];
$_SESSION['state']=$state=$_POST['state'];
$_SESSION['zip']=$zip=$_POST['zip'];
$_SESSION['phone']=$ph=$_POST['phone'];
$_SESSION['mobile']=$ph2=$_POST['mobile'];
$_SESSION['desg']=$desg=$_POST['desg'];
$_SESSION['status']=$status=$_POST['status'];
$_SEESION['brnch']=$branch=$_POST['brname'];
$_SESSION['brcode']=$brcode;
$_SESSION['userlevel']=$ulevel=$_POST['level'];

$query2 = mysql_query("SELECT brcode FROM branch where brname='$branch'");
$row2 = mysql_fetch_array($query2);
$_SESSION['brcode']=$brcode=$row2['brcode'];


if ($row['username']!=$_POST['uid'])
{
     if ($_POST['pwd']==$_POST['rpwd'])
                   {
                    
                    echo "<BR>";
                     echo "<BR>.......................................................................";
                     echo"<BR> PERSONAL DETAILS";  
                     echo "<BR>.......................................................................";
                      echo "<BR>"; 
 
                     echo "<BR>NAME:" . $fname ." " . $mname ." " . $lname;  
                      echo "<BR>GENDER:" . $gender;  
                      echo "<BR>DATE  OF BIRTH:" . $dob;  
                     echo "<BR> ADDRESS:" . $add1 . "," . $add2 ."," . $city . "," . $zip . ",". $state ;
                     echo "<BR> EMAIL:" . $email;
                     echo "<BR> PHONE:" . $ph;
                     echo "<BR> MOBILE:" . $ph2;
                     echo "<BR>";
                     echo "<BR>.......................................................................";
                     echo"<BR> BANK DETAILS";  
                     echo "<BR>......................................................................."; 
                     echo "<BR>";
                     echo "<BR> DESIGNATION	:" . $desg;
                      echo "<BR> STATUS:" . $status;
                      echo "<BR>" ."BRANCH CODE:" ." " . $brcode;  
                     echo "<BR>";
                     echo "<BR>.......................................................................";
                     echo"<BR> LOGIN DETAILS";   
                     echo "<BR>.......................................................................";
                     echo "<BR>";
                    echo "<BR> USERLEVEL:" . $ulevel;
                      echo "<BR> USERID(for login in):" . $username;
                                       }
              else 
                   {
                 echo "check pwd";
                    }
} 
?>    
<form method="post"   action ="trial.php">
<input type="Submit" name="submit" value="Submit">
</form>
<form method="post"   action ="registerfrm.php">
<input type="Submit" name="back" value="back">
</form>

</fieldset>
</center>
</body>
</html>