<?php

class HomeController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$dados['titulo'] = 'Pagina inicial';
		// $agenda = new Agenda();
		// $dados['agenda'] = $agenda->getAgendas();
		$this->loadTemplate('home', $dados);
	}

}