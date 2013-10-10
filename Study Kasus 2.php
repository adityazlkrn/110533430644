<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Study Kasus2</title> 
</head> 
 
<body>  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Film : 
    <input type="checkbox" name="film[]" value="studio 1"checked=" <?PHP
	  if ($_post['th']=="Studio 1"){
		  echo 'selected="selected"';}
      ?>"
    />This is The End 
 
    <input type="checkbox" name="film[]" value="studio 2" 
    />Now You See Me
 
    <input type="checkbox" name="film[]" value="studio 3" 
    />Before Midnight <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
// Ekstraksi nilai 
if (isset($_POST['film'])) { 
  foreach ($_POST['film'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 
 
</body> 
</html> 