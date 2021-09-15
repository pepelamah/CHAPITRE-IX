<!DOCTYPE html> 
 
<html> 
<head> 
<title>Titre de la page</title> 
<meta charset=”utf-8”> 
</head> 
 
<body> 
<?php 
echo '<pre>'; 
print_r($_POST); 
echo '</pre>'; 
if (($_POST['nom']='') OR ($_POST['prenom']='') OR ($_POST['adresse']='') OR ($_POST['ville']='') OR ($_POST['codepostal']=''))
{
    echo"<script>alert('Le formulaire est incomplet');document.location='exo_2_chapitre9.html'</script>";
}


?> 
</body> 
 
</html> 