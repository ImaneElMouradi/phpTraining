

<?php
	$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
	if (isset($POST_['pseudo']) AND isset($_POST['message']) AND !empty($POST_['pseudo']) AND !empty($POST_['message']))
	{
		$pseudo = $POST_['pseudo'];
		$message = $POST_['message'];
	}

?>
<!DOCTYPE html>
<html>

	<head>
	<meta charset="UTF-8"/>
	<title>Le mini-Chat</title>
	</head>

	<body>
		<form method="Post" action="minichat_post.php">
			<center><p><label>Entrer votre pseudo : <input type="text" name="pseudo" id="pseudo" value="<?php if (isset($_COOKIE['pseudo']))
{
echo $_COOKIE['pseudo'];
}else
{
echo 'pseudo';
} ?>" /></label></p></center>
			<center><p><label>Entrer votre message : <input type="text" name="message" id="message"/></label></p></center>
			<center><p><input type="submit" value="envoyer"</p></center>
		</form>


<?php
	$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_ajout, \'%d/%m/%Y à %Hh%imin%ss\') AS date_ajout_fr FROM minichat ORDER BY ID DESC LIMIT 0, 10');

	while ($donnees = $reponse->fetch())
		{
			echo '<p>' . htmlspecialchars($donnees['date_ajout_fr']).'  '. htmlspecialchars($donnees['pseudo']) . ' : ' . htmlspecialchars($donnees['message']) . '</p>';
		}
	$reponse->closeCursor();
	?>






	</body>



</html>
