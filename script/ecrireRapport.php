<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Rédiger un rapport</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../style/connexion.css">
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
	<h1>Rapport de visite</h1>
	<form action="ecrireRapport.php" name="ecrireRapport">
	<table>
    <tr>
	<td>NUMERO :</td>
      <td><input type="text" name="nom" size="10"></td>
    </tr>
    <tr>
      <td>DATE VISITE :</td>
      <td><input type="text" name="dateVisite" size="10"></td>
    </tr>
    <tr>
	<td>PRATICIEN :</td>
	<td><select name="praticien"</td></select>
    </tr>
    <tr>
	<td>COEFFICIENT :</td>
	<td><input type="text" size="6" name="coef"></td>
    </tr>
    <tr>
	<td>REMPLACANT :</td>
	<td><input type="checkbox"</td>
    </tr>
    <tr>
      <td>MOTIF :</td>
      <td>
        <select name="motif">
			<option value="PRD">Périodicité</option>
			<option value="ACT">Actualisation</option>
			<option value="REL">Relance</option>
			<option value="SOL">Sollicitation praticien</option>
			<option value="AUT">Autre</option>
        </select>
      </td>
    </tr>
    <tr>
	<td>BILAN :</td>
	<td><input textarea rows="5" cols"50"></td>
    </tr>
    <tr>
    	<td><h3>Eléments présentés</h3></td>
    </tr>
    <tr>
	<td>PRODUIT 1 :</td>
	<td><select name="prod1"></select></td>
    </tr>
    <tr>
	<td>PRODUIT 2 :</td>
	<td><select name="prod2"></select></td>
    </tr>
    <tr>
	<td>DOCUMENTATION OFFERTE :</td>
	<td><select name="prod1"></select></td>
    </tr>
    <tr>
    	<td><h3>Echantillons</h3></td>
    </tr>
    <tr>
    	<td>Produit :</td>
	<td>
	<select name="produit">
		<option>Produits</option>
	</select>
	<input type="text" name="qte1" size="2">
	<input type="button" value="+">
	</td>
    </tr>
    <tr>
	<td>SAISIE DEFINITIVE :</td>
	<td><input name"saisie" type="checkbox" checked="false"></td>
    </tr>
    <tr>
	<td><input type="submit" value="Publier le rapport"</td>
    </tr>
  </table>
  </form>
</body>
</html>
