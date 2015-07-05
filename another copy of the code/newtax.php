<html> 
<head> 
<title>NEW TAX ENTRY</title> 
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
  body {
    color: purple;
    background-color: #d8da3d }
  </style>
</head> 
<body> 
<form method="post" action="newfield.php">
<center>
<fieldset>
<legend>ENTER THE DETAILS OF THE NEW TAX </legend>

TAX ACT:<input type="text" size="30" maxlength="30" name="act"><br />
<br />
TAXID:<input type="text" size="30" maxlength="30" name="taxid"><br />
TAX DESCRIPTION:<br/>
<TEXTAREA NAME="taxdes" 
   ROWS="5" COLS="30">
</TEXTAREA><br/>
Challan No:<br />
<TEXTAREA NAME="challan" 
   ROWS="3" COLS="25">
</TEXTAREA><br/>
<font size="2" >(enter the form no.'s separating them with commos)</font><br/>
ACT ID:<input type="text" size="20" maxlength="20" name="actid"><br />
<br />
STATUS:<select name="status">
<option value="">CHOOSE</option>
<option value="true">TRUE</option>
<option value="false">FALSE</option>
</select><br/>
<br />
<input type="submit"  name="submit"><br/>
</fieldset>
</center>
</form>
</body>
</html>



