<!DOCTYPE html> 
 
 <html> 
 <head> 
 <title>Titre de la page</title> 
 <meta charset=”utf-8”> 
 </head> 
  
 <body> 
 <?php  
 $fichier=fopen('password.txt','w+'); 
 $texte = $_POST['mdp1'];
 fwrite($fichier,$texte); 

 if($_POST['mdp2']==$fichier){
    echo "Voici les codes dacces :".'<br><br>';
    echo "CDF5-GTUG-VB65-DFTN-V34-78HN-H45T-PDRGV".'<br>';
    echo "Cette page est reservee au personnel NASA. N'oubliez pas de la visiter regulierement car les codes d'acces sont changes toutes les semaines. ";

 }
 else {
    echo "<script>alert('Mot de Passe incorrect!');document.location='exo_4_chapitre9.html'</script>";
 }
 
 ?> 
 </body> 
  
 </html>