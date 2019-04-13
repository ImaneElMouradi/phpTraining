<?php
// Je lance une session pour garder le pseudo d'un membre que je stockerai :
session_start();
// Connexion à la base de données, nom de la table ici minichat. Et tableaux pour la gestion des cas les plus précis en 4ème paramètre :
$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
// Opération de lecture : récupération de tous les messages avec formate DATE FR:
$sql = 'SELECT *, DATE_FORMAT(date_created, \'%d-%m-%y %h:%m:%s\' ) AS date_message FROM minichat ORDER BY date_created DESC LIMIT 10';
$req = $bdd->query($sql);

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mini-chat</title>
</head>
<body>
  <!-- FORMULAIRE OU LE TRAITEMENT SE FAIT DANS LE FICHIER minichat_post.php avec la méthode POST pour l'insertion en base de données -->
  <form action="minichat_post.php" method="POST">
    <p>
      <input type="text" name="pseudo" value="<?php echo isset($_SESSION['pseudo']) ?  $_SESSION['pseudo'] : ' ' ?>" placeholder="Votre pseudo">
    </p>

    <textarea name="message" rows="8" cols="80" placeholder="Votre message ici"></textarea>

    <p>
      <input type="submit" value="Envoyer">
    </p>

  </form>

  <section>

    <?php
    // Recupération des données SQL de la requête faite plus haut
    while($requete = $req->fetch()){
      ?>
      <!-- AFFICHAGE AVEC htmlspecialchars POUR PLUS DE SECURITE et DATE au format FRANCAIS -->
      <p> [<?php echo $requete['date_message'] ?>]
        <strong> <?php echo htmlspecialchars($requete['pseudo'])?> </strong> : <?php echo htmlspecialchars($requete['message']) ?>
      </p>

    <?php
      }
      $req->closeCursor();
      var_dump($_SESSION);
    ?>


  </section>

</body>
</html>
