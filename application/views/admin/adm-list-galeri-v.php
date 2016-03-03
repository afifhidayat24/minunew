<div class="container">
	<h4>Daftar Galeri MINU 2</h4>
</div>

<?php foreach ($listgaleri as $dtgaleri): ?>
<div class="col-md-3">
	<div class="whitebox">
		<div class="poster">
			<img src="<?php echo base_url('assets/img/galeri')  ?>/<?php echo $dtgaleri->img_galeri ?>" width="100%">
		</div>
		<div class="jdlposter"><h4><?php echo $dtgaleri->judul_img ?></h4></div>
		<div class="col-md-5 btn btn-xs btn-info">Edite</div>
		<div class="col-md-2"></div>
		<div class="col-md-5 btn btn-xs btn-danger">Delete</div>
		<div class="sambungfloat"></div>
	</div>
</div>

<?php endforeach ?>