<?php
	
	namespace Core\Controller; // Un peu comme le repertoire du fichier actuel

	/**
	 * Class Controller
	 * @package Core\Controller
	 */
	class Controller{

		protected $viewPath; // Dossier dans le quel se trouve la vue
		protected $template; // Dossier dans le quel se trouve le template
		
		protected function render($view, $variables=[]){

			ob_start();
			if(isset($variables)){
				extract($variables);
			}
			require $this->viewPath.str_replace('.', '/', $view).'.php';
			$content = ob_get_clean();
			require($this->viewPath.'template/'.$_SESSION['africa_sport_ma.lang'].'_'.$this->template.'.php');
		}

		protected function notFound(){

			header("HTTP/1.0 404 Not Found");
			die("Page Introuvable");

		}

		protected function forbidden(){

			header("HTTP/1.0 403 forbidden");
			die("Accès Interdit");

		}
	}
?>