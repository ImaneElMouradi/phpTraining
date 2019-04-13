<?php
  session_start();

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=tp;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  }catch(Exception $e)
  {
    die('Erreur' . $e ->getMessage());
  }


  $req = $bdd ->prepare('INSERT INTO minichat(pseudo,message,date_creation) VALUES(:pseudo,:msg,NOW())');
  $req -> execute(array('pseudo' => htmlspecialchars($_POST['pseudo']),'msg' => htmlspecialchars($_POST['message'])));

  $_SESSION['pseudo']=$_POST['pseudo'];

  header('Location:minichat.php?pseudo=' . $_POST['pseudo'] . '');


 ?>
