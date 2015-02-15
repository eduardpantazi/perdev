<div class="col-sm-12">

	<?php foreach ($articole as $articol): ?>
	
		<h3 class="pageheader"><a href="<?php echo site_url() . "". $articol->nr; ?>"><?php echo $articol->titlu; ?></a></h3>
		<small>Publicat de <b><?php echo $articol->autor; ?></b> - <?php echo afiseazaData($articol->data_scriere); ?></small>
		<hr>
		<p><?php echo $articol->continut; ?></p>

	<?php endforeach; ?>

</div>