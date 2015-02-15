<?php

class Articole extends Blog_Controller {

	function index($numar) {
		if (isset($numar)) {
			foreach($this->articol->afiseazaArticol($numar) as $articol) {
				$data['titlu'] = $articol->titlu;
				$data['continut'] = $articol->continut;
				$data['data_scriere'] = $articol->data_scriere;
				$data['autor'] = $articol->autor;

				$this->layout('afiseazaArticol', "afiseazaComentarii", $data);
				$ultimapagina = current_url();
			}
		}
	}
}