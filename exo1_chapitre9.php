<!DOCTYPE html> 
 
<html> 
<head> 
<title>Titre de la page</title> 
<meta charset=”utf-8”> 
</head> 
 
<body> 
<?php 

echo '<table border="1">';
foreach($_POST as $element=>$valeur){
    echo '<td>';
    echo $element.' : '.$valeur.'<br>';
    echo '</td>';
}
echo '</table>';
?> 
</body> 
 
</html> 