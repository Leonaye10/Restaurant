<?php
//1)Connexion avec MYSQL
$connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
//2)Connexion avec la base de donnees Bonnebouffe
mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base employes");
//3)Requete de selection
$requete=mysql_query("select * from recettes limit 0,3;");
//4)
$nombre=mysql_num_rows($requete); 

echo "<table border='1' style='margin-top:20px;text-align:center;'>";
echo "<tr><td> ID RECETTE </td><td> NOM </td><td> INGREDIENTS </td><td> TYPE </td><td> NOMBRE </td><td> DATE INSCRITE </td><td> PHOTO </td></tr>";
while($resultats=mysql_fetch_row($requete))
{
    $idrecette=$resultats[0];
    $nom=$resultats[1];
    $ingredients=$resultats[2];
    $type=$resultats[3];
    $nombre=$resultats[4];
    $dateinscrite=$resultats[5];
    $photo=$resultats[6];
    echo "<tr><td>" .$idrecette. "</td><td>" .$nom. "</td><td>" .$ingredients. "</td><td>" .$type. "</td><td>" .$nombre. "</td><td>" .$dateinscrite. "</td><td><img width='80px' height='80px' src='Images/" .$photo. "'></td></tr> ";
    
}


echo "</table>"
?>

<p>Pour pouvoir acceder a toutes nos recettes, <a href="index.php?choix=login">CONNECTEZ-VOUS</a><br>
ou <a href="index.php?choix=nonmembre">INSCRIVEZ-VOUS</a></p>

