<?php

class Comentariu extends CI_Model {

	function total() {
		return $this->db->count_all('comentarii');
	}

	function totalAprobate() {
		return $this->db->like('aprobat', true)->get('comentarii')->count_all_result();
	}

	function totalNeaprobate() {
		return $this->db->like('aprobat', false)->get('comentarii')->count_all_result();
	}

	function afiseazaComentarii($numar_articol) {
		$rezultat = $this->db->get_where('comentarii', array('articol_nr' => $numar_articol));

		if ($rezultat->count_all_result() > 0) {
			return $rezultat->result();
		} else {
			return 0;
		}
	}

}