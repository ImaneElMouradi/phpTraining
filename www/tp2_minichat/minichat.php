<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MiniChat</title>
    <link rel="stylesheet" href="style.css">


  </head>



  <body>
    <main>
    <h1>MiniChat</h1>

    <form action="minichat_post.php" method="post">
      <?php
        if(isset($_SESSION['pseudo'])) {
          echo '<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" value="' . htmlspecialchars($_SESSION['pseudo']) . '" required><br><br>';
        }

        else {
          echo '<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" required><br><br>';
        }
        ?>

      <label for="message">Message</label> : <input type="textarea" name="message" required><br><br>
      <button  type="submit" name="envoyer">Envoyer</button><br><br>
    </form>


    <?php

    try{
      $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }catch(Exception $e)
    {
      die('Erreur ' . $e ->getMessage());
    }

    $req = $bdd ->query('SELECT pseudo, message, DATE_FORMAT(date_creation, \'Le %d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM minichat ORDER BY ID desc');
    while ( $data=$req->fetch() ) {
      echo '<p> <strong>[' . htmlspecialchars($data['date_creation_fr']) . '] ' . htmlspecialchars($data['pseudo']) . '</strong> : ' . htmlspecialchars($data['message']) . '<br> </p>';
    }


    $req -> closeCursor();








     ?>


   </main>
  </body>
</html>
