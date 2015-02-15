<?php

class Setari extends CI_Model {

	function setare($sectiune) {
		$rezultat = $this->db->select($sectiune)->get('setari');
		if ($rezultat->count_all_results() > 0) {
			return $rezultat->row()->$sectiune;
		} else {
			return null;
		}
	}

}