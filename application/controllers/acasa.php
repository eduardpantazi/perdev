<?php

class Acasa extends Blog_Controller {

	function index() {
		$data['articole'] = $this->articol->afiseazaArticole();
		$this->layout("acasa", null, $data);
	}

	function page($numar) {
		$this->layout("acasa", null, $data);
	}

}