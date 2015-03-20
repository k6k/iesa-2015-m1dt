<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="post.php" method="post">
		<fieldset>
		<?php 
				$date = date('d/m/Y',time());

		 ?>
			<legend>Entrez vos informations, nous sommes le <?php echo $date ?></legend>
			<label for="nom">Nom</label><br>
			<input type="text" name='nom'><br><br>

			<label for="prenom">Prenom</label><br>
			<input type="text" name='prenom'><br><br>

			<input type="submit" value="Envoyer"><br>
		</fieldset>
	</form>
</body>
</html>