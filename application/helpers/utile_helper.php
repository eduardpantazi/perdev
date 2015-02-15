<?php
	function afiseazaData($data_creare) {
		setlocale(LC_ALL, 'ro_RO');
		echo strftime("%A %e %B %Y", strtotime($data_creare));
	}