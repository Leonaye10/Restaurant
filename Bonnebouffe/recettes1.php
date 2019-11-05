<?php
    //1)Connexion avec MYSQL
    $connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
    //2)Connexion avec la base de donnees Bonnebouffe
    mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base employes");
    
        $requete2=mysql_query("select * from recettes;");
        $nombre2=mysql_num_rows($requete2); 

        echo "<table border='1' style='margin-top:20px;text-align:center;'>";
        echo "<tr style='background-color:#996600'><td> ID RECETTE </td><td> NOM </td><td> INGREDIENTS </td><td> TYPE </td><td> NOMBRE </td><td> DATE INSCRITE </td><td> PHOTO </td> </tr>";
        while($resultats=mysql_fetch_row($requete2))
        {
                    $idrecette=$resultats[0];
                    $nom=$resultats[1];
                    $ingredients=$resultats[2];
                    $type=$resultats[3];
                    $nombre=$resultats[4];
                    $dateinscrite=$resultats[5];
                    $photo=$resultats[6];
        echo "<tr><td>" .$idrecette. "</td><td>" .$nom. "</td><td>" .$ingredients. "</td><td>" .$type. "</td><td>" .$nombre. "</td><td>"    .$dateinscrite. "</td><td><img width='80px' height='80px' src='Images/" .$photo. "'></td></tr> ";
    
        }


        echo "</table>";
    ?>