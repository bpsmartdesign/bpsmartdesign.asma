<?php

	namespace AfricaSportManagementAgency\Controller\Page;

	class HomeController extends \AfricaSportManagementAgency\Controller\AppController{

		public function index() {

			$this->render($_SESSION['africa_sport_ma.lang'].'.home.index');
		}
		public function a_propos() {

			$this->render($_SESSION['africa_sport_ma.lang'].'.home.a_propos');
		}
		public function service() {

			$this->render($_SESSION['africa_sport_ma.lang'].'.home.service');
		}
		public function contact() {

			$this->render($_SESSION['africa_sport_ma.lang'].'.home.contact');
		}
	}
 ?>