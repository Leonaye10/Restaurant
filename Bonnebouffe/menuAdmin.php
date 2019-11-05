<html>
    <head>
        <link href="Styles.css" rel="stylesheet" >
    <title>Bonne bouffe</title>
    </head>
    
    <body style="text-align:center;">
        <center>
    
            <div style="width:80%;height:20%;border:1px solid black;">
                <img src="Images/Restaurant.jpg" style="width:100%;height:100%;">
            
            </div>
            <div style="width:80%;height:5%;border:1px solid black;background-color: #996600;">
                <!--envoi des choix par la methode GET-->
                <ul>
<li style="display:inline;"><a href="index.php?choix=accueil">Accueil</a></li>
<li style="display:inline;margin-left:50px;"><a href="menuAdmin.php?choix=ajout">Ajouter</a></li>
<li style="display:inline;margin-left:50px;"><a href="menuAdmin.php?choix=miseajour">Modifier</a></li>
<li style="display:inline;margin-left:50px;"><a href="menuAdmin.php?choix=suppression">Supprimer</a></li>
<li style="display:inline;margin-left:50px;"><a href="menuAdmin.php?choix=recettes1">Recettes</a></li>


</ul>
            
            
            </div>
            <div style="width:80%;height:70%;border:1px solid black;">
                
            <?php 
                if(isset($_REQUEST['choix']))
                {
                //1) Recuperation de la variable par GET
                $choix = $_GET['choix'];
                switch ($choix)
                {
                    case "accueil" :
                    include("accueil.php");
                    break;
                    
                    case "ajout" :
                    include("ajout.php");
                    break;
                    
                    case "miseajour" :
                    include("miseajour.php");
                    break;
                    
                    case "suppression" :
                    include("suppression.php");
                    break;
                    
                    case "recettes1":
                    include("recettes1.php");
                    break;
                    
                    
                    default;
                    
                }
                }


                ?>
                
            
            
            </div>
            <div style="width:80%;height:5%;border:1px solid black;"></div>
            
            
            
    </center>
    
    </body>
    
    
</html>