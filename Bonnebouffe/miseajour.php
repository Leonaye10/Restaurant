<form method="post" action="menuAdmin.php?choix=miseajour">
    <h4>Veuillez choisir le ID de la recette que vous souhaiter modifier.</h4>
		<table>
            <tr><td>Id de la recette : 
                <select name="choix">
                <?php
                 $connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
                mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base bonne bouffe");
                $query=mysql_query("select idrecette from recettes;");
                while($rows=mysql_fetch_row($query))
                {
                 echo"<option>".$rows[0]."</option>";
                }
                ?>
                
                </select></td>
                <td><input type="submit" name="chercher" value="Chercher" ></td>
            </tr>
    
    </table>
    </form>
			<?php
                if(isset($_REQUEST['chercher']))
                {
                $idrecette=$_REQUEST['choix'];
				//2)Requete SQL
				$requete1=mysql_query("Select * from recettes where idrecette='$idrecette';") or die("Erreur de requete SQL");
                $nbrows=mysql_affected_rows();
                    if($nbrows<=0)
                    {
                        echo "Echec";
                    }
                    else
                    {
                         echo "<form method='POST' action='menuAdmin.php?choix=miseajour'>";
                echo "<table>";
                        while($resultats=mysql_fetch_row($requete1))
                        {
                       
                        $nom=$resultats[1];
                        $ingredients=$resultats[2];
                        $type=$resultats[3];
                        $nombre=$resultats[4];
                        $dateinscrite=$resultats[5];
                        $photo=$resultats[6];
                echo "<tr><td>idrectte : </td><td><input type='text' name='idrec' value='$idrecette' ></td></tr>";
				echo "<tr><td>Nom : </td><td><input type='text' name='nom' value='$nom'></td></tr>";
				echo "<tr><td>Ingredients : </td><td><input type='text' name='ingredients' value='$ingredients'></td></tr>";
                echo "<tr><td>Type : </td><td><input type='text' name='type' value='$type'></td></tr>";
				echo "<tr><td>Nombre : </td><td><input type='text' name='nombre' value='$nombre'></td></tr>";
				echo "<tr><td>Date inscrite : </td><td><input type='text' name='dateinscrite' value='$dateinscrite'></td></tr>";
				echo "<tr><td>Photo : </td><td><input type='text' name='photo' value='$photo'></td></tr>";
                echo "<tr><td><input type='submit' name='ok' value='misajour'></td></tr>";
                             }
                echo "</table>";
                echo "</form>";
                       
                    }
                    }
?>
				<?php
		if(isset($_REQUEST['ok']))
		{
            
            $ides=$_REQUEST['idrec'];
			$nom=$_REQUEST['nom'];
            $ingredients=$_REQUEST['ingredients'];
            $type=$_REQUEST['type'];
            $nombre=$_REQUEST['nombre'];
            $dateinscrite=$_REQUEST['dateinscrite'];
            $photo=$_REQUEST['photo'];
           
			$connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
            mysql_select_db('bonnebouffe',$connect) or die("Erreur de connexion a la base bonne bouffe");
				
				//2)Requete SQL
            $requete2=mysql_query("update recettes set nom='$nom',ingredients='$ingredients',type='$type',nombre='$nombre',dateinscrite='$dateinscrite',photo='$photo' where idrecette='$ides'; ");
			$nbrows=mysql_affected_rows();
            if($nbrows<=0)
            {
                echo "Echec de Mise a jour";
               
            }
            else
            {
                 echo "La recette " .$ides. " a ete mise a jour";
            }
		}
		?>
