<?php
	////////////////////////////////////////////////////////////////////// I N T R O D U C T I O N
	define('ROOT', dirname(__DIR__)); // Constante qui contient nom du repertoire parent
	require ROOT.'/App/App.php'; // Inclusion du fichier App.php [notre fichier principal]
	App::load(); // Appel de la fonction load() qui se trouve dans la classe statique App

	////////////////////////////////////////////////////////////////////// L A   L A N G U E
	if(!isset($_SESSION['africa_sport_ma.lang'])) {
		if(isset($_GET['p'])) {
			$__tmp = stripcslashes(htmlspecialchars($_GET['p']));
			$__tmp = explode('.', $__tmp);
			$_SESSION['africa_sport_ma.lang'] = $__tmp[0];
		} else {

			$_SESSION['africa_sport_ma.lang'] = 'fr';
		}
	}

	if($_SESSION['africa_sport_ma.lang'] == '*') {
		$_SESSION['africa_sport_ma.lang'] = 'fr';
	}

	///////////////////////////////////////////////////////////////////// C H A N G E M E N T   D E   L A N G U E
	if(!empty($_POST)) {
		$_SESSION['africa_sport_ma.lang'] = $_POST['lang'];
	}

	///////////////////////////////////////////////////////////////////// P E T I T   S Y S T E M E   D E   R O U T I N G
	$p = isset($_GET['p']) ? stripcslashes(htmlspecialchars($_GET['p'])) : $_SESSION['africa_sport_ma.lang'].'.Page.Home.Index'; // récupération de la page à charger
	$p = explode('.', $p); // division de la valeur de $p en un tableau de plusieurs éléments correspondants aux noms des fichiers à charger

	//////////////////////////////////////////////////////////////////// C O N T R O L L E U R  E T  V U E
	$controller = '\AfricaSportManagementAgency\Controller\\'.ucfirst($p[1]).'\\'.ucfirst($p[2]).'Controller'; // Appel du controleur correspondant
	$action = $p[3]; // Chargement de la méthode correspondante

	$controller = new $controller(); // Appel de la page correspondante
	$controller->$action(); // Appel de la page correspondante
?>