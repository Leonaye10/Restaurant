<form method="post" action="menuAdmin.php?choix=suppression">
    <h4>Veuillez choisir le ID de la recette que vous souhaiter supprimer.</h4>
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
                <td><input type="submit" name="supprimer" value="Supprimer" ></td>
            </tr>
    
    </table>
    </form>
<?php
    if(isset($_REQUEST['supprimer']))
    {
    $id=$_REQUEST['choix'];
        
    $connect=mysql_connect('localhost','root','') or die("Erreur de connexion");
    mysql_select_db('Bonnebouffe',$connect) or die("Erreur de connexion a la base bonne bouffe");

    $requete=mysql_query("delete from recettes where idrecette='$id';");
    
    $nbrows=mysql_affected_rows();
        if($nbrows<=0)
        {
            echo "Impossible d'effectuer la suppression!";
        }
        else
        {
            echo "Suppression de la recette ".$id. " effectuee";
        }
    }

?>
