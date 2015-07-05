<html> 
<head> 
<title>TAX ENTRY</title> 
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
 $dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sister';   
$dbname = 'login';

// make a connection to mysql here
$conn = mysql_connect ($dbhost, $dbuser, $dbpass);
if(!$conn)
{
die('could not connect: ' . mysql_error());
}else

//select database to use
$conn = mysql_select_db ($dbname);


$taxact=$_POST['act'];
$taxid=$_POST['taxid'];
$taxdesc= $_POST['taxdes'];
$challan=explode("," , $_POST['challan']);
$actid=$_POST['actid'];
$status = $_POST['status'];
$size= count($rchallan);
$size1= count($challan);

$query = mysql_query("SELECT * FROM taxtype");
$row = mysql_fetch_array($query);
if ($row['taxname']==$_POST['act'])
{
       $taxtypeid=$row['taxtypeid'];
       if ($size==$size1)
        {
         for ($i=0;$i<$size;$i++)
               {
                        mysql_query("INSERT  INTO taxform(taxtypeid,formno,status)  VALUES('$taxtypeid','$challan[$i]','$status')");
                 }
       }
  elseif($size>$size1)
    {
                     for ($i=0;$i<$size;$i++)
               {
                        mysql_query("INSERT  INTO taxform(taxtypeid,formno,status)  VALUES('$taxtypeid','$challan[$i]','$status')");
                }      
     }
 else
    {
                     for ($i=0;$i<$size1;$i++)
               {
                        mysql_query("INSERT  INTO taxform(taxtypeid,formno,status)  VALUES('$taxtypeid','$challan[$i]','$status')");
                }      
     }
}
else 
       {
            mysql_query("INSERT  INTO taxtype(taxname,taxdesc,taxid,actid,status)  VALUES('$taxact','$taxdesc','$taxid','$actid','$status')");
            $tax_id = mysql_insert_id();
            if ($size==$size1)
                      {
                                for ($i=0;$i<$size;$i++)
                                        {
                                            mysql_query("INSERT  INTO taxform(taxtypeid,formno,status)  VALUES('$tax_id','$challan[$i]','$status')");
                                         }
                        }
            elseif($size>$size1)
                       {
                                   for ($i=0;$i<$size;$i++)
                                      {
                                            mysql_query("INSERT  INTO taxform(taxtypeid,formno,status)  VALUES('$tax_id','$challan[$i]','$status')");
                                       }      
                        }
                     else
                          {
                                      for ($i=0;$i<$size1;$i++)
                                         {
                                                 mysql_query("INSERT  INTO taxform(taxtypeid,formno,status)  VALUES('$tax_id','$challan[$i]','$status')");
                                           }            
                              }
     }
?>

<h1> NEW TAX HAS BEEN ADDED</h1>
<a href="http://localhost/datacheck.php"  target="_self">GO BACK TO TAX PAGE</a>

</fieldset>
</center>
</body>
</html>