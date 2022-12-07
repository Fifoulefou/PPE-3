# PPE-3

<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css.css"/>
    </head>
    <body>
 
        <!-- base de données-->

        
        <?php
            //Connection a une BDD
            $conn = new PDO(
                'mysql:host=localhost;dbname=amset;charset=utf8',
                'root',//nom d'utilisateur phpmydamin
                ''//MDP d'utilisateur phpmyadmin
            );
   
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
 
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=sessionutilisateur", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }
           
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur ! " . $e->getMessage();
 
              //On ferme la connexion
              $conn = null;
            }
        ?>
 
        <div id="container">
            <!-- zone de connexion -->
           
            <form action="Verification.php" method="POST">
                <h1>Connexion</h1>
               
                <label><b>Identifiant</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
 
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
 
                <input type="submit" id='submit' href="Accueil.html" value='Connexion' >
            </form>
        </div>
        <div>
        <a id="ang" href="Anglais.html" ><img src="aaa.jpg"/></a>
        <a id="fr" href="html.html" ><img src="fr.png"/></a>
        </div>
        <img id="logo" src="logo.png">
    </body>
</html>
