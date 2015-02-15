<?php

class Articol extends CI_Model {

	function total() {
		return $this->db->count_all('articole');
	}

	function totalAutor($nume) {
		return $this->db->like('autor', $nume)->get('articole')->count_all_results();
	}

	function totalPublice() {
		return $this->db->get_where('articole', array('public' => true))->count_all_results();
	}

	function afiseazaArticol($numar_articol) {
		$cauta  = $this->db->get_where('articole', array('nr' => $numar_articol));

		if ($cauta->num_rows() > 0) {
			if ($cauta->row()->public == true) {
				return $cauta->result();
			} else {
				return show_error("Ne pare rau, dar articolul nu poate fi accesat", 500, "Nu am gasit nimic");
			}
		} else {
			return show_error("Ne pare rau, dar articolul nu poate fi accesat", 500, "Nu am gasit nimic");
		}
	}

	function afiseazaArticole() {
		$arhiva = $this->db->get_where('articole', array('public' => true));
		if ($arhiva->num_rows() > 0) {
			return $arhiva->result();
		} else {
			return "Ne pare rau, dar nu este niciun articol scris pe acest blog.";
		}
		
	}
}