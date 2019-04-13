<?php
session_start();
// Connexion à la base de données une nouvelle fois pour que cette page ait accès aux informations de la BDD.
$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// Vérification sécurité + inscription du message dans la base de données
if(!empty($_POST['pseudo']) && !empty($_POST['message'])){

  // Requête SQL dans une variable pour + de lisibiltié
  $sql = 'INSERT INTO minichat(pseudo, message, date_created) VALUES (:pseudo, :message, NOW())';
  $requete = $bdd->prepare($sql);
  // J'associe chaque valeur grâce à bindValue pour + de clarté. Je préfère cette méthode au lieu de mettre un tableau directement dans execute()
  $requete->bindValue(':pseudo', htmlspecialchars($_POST['pseudo']));
  $requete->bindValue(':message', htmlspecialchars($_POST['message']));
  // J'execute
  $requete->execute();
  // Je renvoie vers minichat.php
  // Stockage du pseudo que je mettrai ensuite dans l'input :
  $_SESSION['pseudo'] = $_POST['pseudo'];
  header('Location: minichat.php');

} else {
  include('minichat.php');
}
