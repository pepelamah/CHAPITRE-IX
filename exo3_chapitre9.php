<!DOCTYPE html> 
 
<html> 
<head> 
<title>Titre de la page</title> 
<meta charset=”utf-8”> 
</head> 
 
<body> 
<?php 
print_r($_POST).'<br>'; 
echo "Nom du navigateur: ".$_SERVER['HTTP_USER_AGENT'];

?> 
</body> 
 
</html> 