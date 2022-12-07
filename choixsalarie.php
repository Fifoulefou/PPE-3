# PPE-3
<?php
  $host = 'localhost';
  $dbname = 'amset';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM service";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="css.css">
        <title>Service commerciale</title>
    </head>
    <body>
       
        <div id="containerse">
            <!-- Haut de page-->
            <div class="row">
                <h1>Service commerciale</h1>
              </div>
              <div class="row">
                <h2>Séléction d'un service </h2>
              </div>
        </div>
        <div id="containertab">
 
        <p id="Col1">Colonne à afficher</p>
        <div id="Check">
        <div id="identifiant"><input type="checkbox" name="type" id="type" /> <label for="type">Identifiant</label></div><br />
        <div id="Nom"><input type="checkbox" name="type" id="type" /> <label for="type">Nom</label></div><br />
        <div id="NombreSal"><input type="checkbox" name="type" id="type" /> <label for="type">Nombre Salariés</label></div><br />
        </div>
       
   
           
 
        </div>
        <div id="containertab2">
        <!-- Tableau en html qui devra s'afficher a partir de la BDD-->
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Service</th>
            </tr>
          </thead>
          <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
              <a href="" ><td><?php echo htmlspecialchars($row['Id']); ?></td></a>
              <td><?php echo htmlspecialchars($row['Nom_du_service']); ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
        
        </div>
           
 
        </div>
       
      
   
    </body>
</html>
