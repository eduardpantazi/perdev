<?php

class Utilizator extends CI_Model {

	function dateUtilizator($nume) {
		$rezultat = $this->db->get_where('utilizatori', array('nume' => $nume));
		if ($rezultat->count_all_results() > 0) {
			return $rezultat->result();
		} else {
			return null;
		}
	}

	function schimbaParola($nume) {
		return null;
	}
}