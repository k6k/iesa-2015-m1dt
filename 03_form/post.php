<?php 
		if(isset($_POST) && (!is_null($_POST['prenom'])) && (!is_null($_POST['nom']))){
			echo "Vos infos sont : ".$_POST['prenom'].' '.$_POST['nom'];
		}else{
			echo "Veuillez fournir les données SVP";
		}
 ?>