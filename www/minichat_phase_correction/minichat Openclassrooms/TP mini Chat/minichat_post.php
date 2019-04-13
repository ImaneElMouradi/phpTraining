<?php
setcookie('pseudo',$_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
 
	
	$bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<!DOCTYPE html>
<html>
	
	<head>
	<meta charset="UTF-8"/>
	
	</head>

	<body>
		

<?php
	$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date_ajout) VALUES (?, ?, NOW())');
	$req->execute(array($_POST['pseudo'], $_POST['message']));
	
	header('Location: minichat.php');
	?>


	</body>



</html>