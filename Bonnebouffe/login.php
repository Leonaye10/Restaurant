<?php
    if(isset($_REQUEST['submitMembres']))
       {
          
            $login = $_REQUEST['login'];
            $password = $_REQUEST['password'];
        
            $connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
            //2)Connexion avec la base de donnees Bonnebouffe
            mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base bonne bouffe");
            //3)Requete de selection
            $requete=mysql_query("select * from membre where login = '$login' AND passeword = '$password';") or die("Erreur de requete SQL");
            $resultat=mysql_affected_rows();
            if($resultat<=0) 
            { 
                echo " Veuillez resaisir votre login et mot de passe!";
                include("login0.php");
                
            }
            else 
            {   
                echo "Bonjour " . $login ; 
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
            } 
        // 5) fermeture de la connexion 
        mysql_close();
       }

    else  if(isset($_REQUEST['submitAdmin']))
       {
            $login = $_REQUEST['login'];
            $password = $_REQUEST['password'];
        
            $connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
            //2)Connexion avec la base de donnees Bonnebouffe
            mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base bonne bouffe");
            //3)Requete de selection
            $requete=mysql_query("select * from admin where login = '$login' AND password = '$password';") or die("Erreur de requete SQL");
            $resultat=mysql_affected_rows();
            if($resultat<=0) 
            { 
                echo " Veuillez resaisir votre login et mot de passe!"; 
                include("login0.php");
            }
            else 
            {   
                echo "Bonjour " .$login ;
                include("menuAdmin.php");
                
            } 
    
        }
    else
    {
        include("login0.php");
    }
?>
