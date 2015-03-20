<?php 
		if(isset($_POST['submit'])){
			if((!empty($_POST['prenom'])) && (!empty($_POST['nom']))){
				$url = "index.php?nom=".$_POST['nom']."&prenom=".$_POST['prenom'];
				header('location:'.$url);
			}else{
				header('location:index.php');
			}
		}else{
			echo "Veuillez fournir les données SVP";
		}
 ?>