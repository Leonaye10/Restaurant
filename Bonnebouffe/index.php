<html>
    <head>
        <link href="Styles.css" rel="stylesheet" >
    <title>Bonne bouffe</title>
    </head>
    
    <body style="text-align:center;">
        <center>
    
            <div id="img" style="width:80%;height:20%;border:1px solid black;">
                <img src="Images/Restaurant.jpg" style="width:100%;height:100%;">
            
            </div>
            <div style="width:80%;height:5%;border:1px solid black;background-color: #996600;">
                <!--envoi des choix par la methode GET-->
                <ul>
<li style="display:inline;"><a href="index.php?choix=accueil">Accueil</a></li>
<li style="display:inline;margin-left:50px;"><a href="index.php?choix=login">Login</a></li>
<li style="display:inline;margin-left:50px;"><a href="index.php?choix=recettes">Recettes</a></li>
<li style="display:inline;margin-left:50px;"><a href="index.php?choix=contact">Contact</a></li>
<li style="display:inline;margin-left:50px;"><a href="index.php?choix=references">References</a></li>


</ul>
            
            
            </div>
            <div style="width:80%;height:70%;border:1px solid black;">
                
            <?php 
                //1) Recuperation de la variable par GET
                $choix = $_GET['choix'];
                switch ($choix)
                {
                    case "accueil" :
                    include("accueil.php");
                    break;
                    
                    case "login" :
                    include("login.php");
                    break;
                    
                    case "recettes" :
                    include("recettes.php");
                    break;
                    
                    case "contact" :
                    include("contact.php");
                    break;
                    
                    case "references" :
                    include("references.php");
                    break;
                    
                    case "nonmembre" :
                    include("nonmembre.php");
                    break;
                    
                    case "ajout":
                    include("ajout.php");
                    break;
                    
                    default;
                    
                }


                ?>
                
             
            </div>
            <div style="width:80%;height:5%;border:1px solid black;"></div>
            
            
            
    </center>
    
    </body>
    
    
</html>