<?php
    if(isset($_REQUEST['submit']))
       {
    $prenom = $_REQUEST['prenom'];
    $nom = $_REQUEST['nom'];
    $email = $_REQUEST['email'];
    $datenaissance = $_REQUEST['date'];
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    $idmembre = substr($nom,0,3).substr($prenom,0,1);
        
    $connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
    //2)Connexion avec la base de donnees Bonnebouffe
    mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base bonne bouffe");
    //3)Requete de selection
    $requete=mysql_query("insert into membre(idmembre,prenom,nom,email,datenaissance,login,password)        VALUES('$idmembre','$prenom','$nom','$email','$datenaissance','$login','$password');") or die("Erreur de requete SQL");
    //4)
    $resultat=mysql_affected_rows();
        if($resultat<=0) 
    { 
        echo " Echec d'insertion"; 
    }
        else 
    {   
        echo " Insertion reussie!"; 
    } 
        // 5) fermeture de la connexion 
        mysql_close();
       }
?>
<section class="LoginGauche">
    <img src="Images/images.jpe">
        </section>
<!--formulaire de l'inscription-->
<section class="LoginDroite">
        <h3> Membres </h3>
<form method="post" action="index.php?choix=nonmembre">
    <table>
    <tr><td>Prenom :</td><td><input name="prenom" value=""></td></tr>
    <tr><td>Nom :</td><td><input name="nom" value=""></td></tr>
    <tr><td>Email :</td><td><input type="email" name="email" value=""></td></tr>
    <tr><td>Date de Naissance :</td><td><input type="date" name="date" value=""></td></tr>
    <tr><td>Login :</td><td><input name="login" value=""></td></tr>
    <tr><td>Password : </td><td><input type="password" name="password" value=""></td></tr>
    <tr><td colspan="2"><input type="submit" name="submit" value="S'inscrire">
    
        </td></tr>
        </table>
</form>
</section>
