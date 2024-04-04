 <?php
	// Définitions de constantes pour la connexion à MySQL
	$hote="localhost";
	$login="root";
	$mdp="";
	$nombd="dbGSB";

	// Connection au serveur
	try { 
		$connexion=new PDO("mysql:host=$hote;dbname=$nombd",$login,$mdp);
	} 
	catch ( Exception $e ) {
		die("\n Connexion à localhost impossible: ".$e->getMessage());
	}

	if (isset($_GET["login"]) && isset($_GET["mdp"])) {
        // Récupérer les valeurs soumises dans les champs login et mdp
        $login = $_GET["login"];     // Vérifier si l'identifiant est correcte
        $mdp = $_GET["mdp"];         // Vérifier si le mot de passe est correcte 
?>
