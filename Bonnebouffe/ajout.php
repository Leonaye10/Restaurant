<h3> Ajouter une recette </h3>
<form method="post" action="menuAdmin.php?choix=ajout">
    <p class="text"></p>
    <table>
    <tr><td>Id recette :</td><td><input name="id" value=""></td></tr>
    <tr><td>Nom :</td><td><input name="nom" value=""></td></tr>
    <tr><td>Ingredients :</td><td><input type="ingredients" name="ingredients" value=""></td></tr>
    <tr><td>Type :</td><td><input name="type" value=""></td></tr>
    <tr><td>Nombre :</td><td><input type="number" name="nombre" value=""></td></tr>
    <tr><td>Date inscrite : </td><td><input type="date" name="date" value=""></td></tr>
        <tr><td>Photo : </td><td><input name="photo" value=""></td></tr>
    <tr><td colspan="2"><input type="submit" name="Ajouter" value="Ajouter"></td></tr>
    </table>
</form>
<?php
    if(isset($_REQUEST['Ajouter']))
    {
    //1)Recuperation des donnees
    $id=$_REQUEST['id'];
    $nom=$_REQUEST['nom'];
    $ingredients=$_REQUEST['ingredients'];
    $type=$_REQUEST['type'];
    $nombre=$_REQUEST['nombre'];
    $date=$_REQUEST['date'];
    $photo=$_REQUEST['photo'];

    //2)Connexion a la base de donnees
    $connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
    mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base bonne bouffe");
    //3)Requete de selection
    $requete=mysql_query("insert into recettes values('$id','$nom','$ingredients','$type','$nombre','$date','$photo');") or die("Erreur de requete SQL");
    $resultat=mysql_affected_rows();
    if($resultat<=0) 
    { 
        echo " Veuillez entrer a nouveau les donnees!";
        include("ajout.php");
    }
    else 
    {
        echo " Votre recette a ete ajoute avec succes";
    }
    }
?>

