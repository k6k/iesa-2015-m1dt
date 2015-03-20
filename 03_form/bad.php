<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="#" method="post">
		<fieldset>
		<?php 
			if(isset($_POST['submit'])){
			echo	((!is_null($_POST['prenom'])) && (!is_null($_POST['nom']))) ? "Vos infos sont : ".$_POST['prenom'].' '.$_POST['nom'] :  '';
			}
			$date = date('d/m/Y',time());
		?>
			<legend>Entrez vos informations, nous sommes le <?php echo $date ?></legend>
			<label for="nom">Nom</label><br>
			<input type="text" name='nom'><br><br>

			<label for="prenom">Prenom</label><br>
			<input type="text" name='prenom'><br><br>

			<input type="submit" value="Envoyer" name="submit"><br>
		</fieldset>
	</form>
</body>
</html>