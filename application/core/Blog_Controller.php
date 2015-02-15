<?php

class Blog_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		global $ultimapagina;
		session_start();
	}

	function setari($sectiune) {
		$setare = $this->setaridb->setari($sectiune);
		return $setare;
	}

	public function layout($numepagina,$subpagina = null, $date = null ) {
		if (isset($subpagina)) {
			$this->load->view('global/antet', $date);
			$this->load->view('pagini/' .$numepagina, $date);
			$this->load->view('pagini/' .$subpagina, $date);
			$this->load->view('global/subsol', $date);
		} else {
			$this->load->view('global/antet', $date);
			$this->load->view('pagini/' .$numepagina, $date);
			$this->load->view('global/subsol', $date);
		}
	}
}