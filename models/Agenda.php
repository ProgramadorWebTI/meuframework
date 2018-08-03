<?php

class Agenda extends Model {

	// TECNICA PARA RODAR DOIS CONSTRUCT, SEMPRE USAR O __CONSTRUCT;
	public function __construct() {
		parent::__construct();
	}

	public function getAgendas() {
		$sql = "SELECT * FROM agendas";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$stmt = $stmt->fetchAll(\PDO::FETCH_OBJ);
		return $stmt;
	}

}