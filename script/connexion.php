<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Se connecter ou s'inscrire</title>
	<link rel="stylesheet" href="../style/connexion.css">
	<link rel="shortcut icon" href="./img/gsb.png"/>
	<meta charset="utf-8">
	<script language="javascript">
	function verif()
	{
		var champsAVerifier = ['nom', 'prenom', 'adresse', 'cp', 'ville', 'secteur', 'login1', 'mdp1'];
		var champVide=false;
		for (var i = 0; i < champsAVerifier.length; i++) {
			if (document.getElementById(champsAVerifier[i]).value == '') {
				champVide = true;
			}
		}
	if (champVide==true){
		alert("Veuillez remplir tous les champs du formulaire")
		return false
	}else{
		return true;
	}
	}
	
	function valid()
	{ret=confirm("etes vous sûr de vouloir effacer le formulaire ?");
	return ret;
	}
	</script>
</head>

<body>
	<!-- debut de l'enveloppe globale du site -->
	<div id="haut">
	<!-- debut en tete -->
	<div id="header">
	<?php
		include("includes/hautPage.html")
	?>
	<!-- fin en tete -->
	<!-- corps (partie droite) -->
	<div id="droitecorps">
	<h1>Inscrivez-vous</h1><br>
	<form action="verifInscription.php" method="get" name="inscription" onReset="return valid()" onSubmit="return verif()">
		Nom :
		<input type="text" name="nom" id="nom" size="25"><br>
		Prenom :
		<input type="text" name="prenom" id="prenom" size="50"><br>
		Adresse :
		<input type="text" name="adresse" id="adresse" size="50"><br>
		Code Postal :
		<input type="number" name="cp" id="cp" size="5"><br>
		Ville :
		<input type="text" name="ville" id="ville" size="30"><br>
		Secteur :
		<input type="text" name="secteur" id="secteur" size="1"><br>
		Identifiant : 
		<input type="text" name="login1" id="login1"><br>
		Mot de passe :
		<input type="password" name="mdp1" id="mdp1"><br>
		<input type="submit" value="S'inscrire">
		<input type="reset" value="Annuler">
	</form>
	<h1>Deja un compte ? Se connecter :</h1>
	<form action="verifConnexion.php" method="get" name="connexion">
		Type de compte :<br>
		<input type="radio" id="visiteur" name="visiteur">
		<label for="visiteur">Visiteur</label>
		<input type="radio" id="dr" name="dr">
		<label for="dr">Délégué Régional</label>
		<input type="radio" id="r" name="dr">
		<label for="dr">Délégué Régional</label><br>
		Identifiant : 
		<input type="text" name="login2"><br>
		Mot de passe :
		<input type="password" name="mdp2"><br>
		<input type="submit" value="Se connecter">
	</form>
	</div> <!-- fin corps (partie droite)  -->
    
	<!-- debut bas page -->
	<?php
		include("includes/basPage.html")
	?>
	<!-- fin bas page -->
   </div><!-- fin enveloppe globale du site-->
</body>

</html>
