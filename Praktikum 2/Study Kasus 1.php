<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Daftar Offering PTI 2011</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Offering : 
    <select name="Off"> 
      <option value="Off A">Off A 
      <option value="Off B">Off B 
      <option value="Off C">Off C
      <option value="Off D">Off D
      <option value="Off E"selected="
      <?PHP
	  if ($_post['off']=="Off A"){
		  echo 'selected="selected"';}
      ?>">Off E
      
    </select> <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
if (isset($_POST['Off'])) { 
  echo $_POST['Off']; 
} 
?> 
</body>
</html>