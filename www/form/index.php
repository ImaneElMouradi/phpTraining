<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Remplir le formulaire</title>
  </head>
  <body>






    <form method="post">
      <input type="text" name="pseudo" id="pseudo" placeholder="Votre identifiant..." required>
      <input type="text" name="email" id="email" placeholder="Votre Email..." required>
      <input type="text" name="age" id="age" placeholder="Votre age..." required>
      <input type="submit" name="formsend" id="pseudo">
    </form>


    <!-- on veut récup les infos saisies/ isset est use pour savoir si on a appuyé sur le bouton ou non (on recup que si le bouton a été use) -->
    <?php
      include 'database.php';
      global $db;

      $q = $db->query("SELECT * FROM users");
      // tant qu'il y a un enregistrement
      while($user = $q->fetch()){
        var_dump($users);
      }

      




      if(isset($_POST['formsend'])){

        echo 'Votre nom est: ' . $_POST['pseudo'] . '<br>';
        echo 'Votre email est : ' . $_POST['email'] . '<br>';
        echo 'Votre age est : ' . $_POST['age'] . '<br>';

      }
     ?>



  </body>
</html>
