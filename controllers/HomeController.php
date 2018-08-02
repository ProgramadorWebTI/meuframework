<?php

class HomeController extends Controller {

	public function __construct() {

	}

	public function index() {
		$dados = [];
		// $agenda = new Agenda();
		// $dados['agenda'] = $agenda->getAgendas();
		$this->loadTemplate('home', $dados);
	}

}