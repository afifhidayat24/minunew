<?php if ($this->session->userdata('c_status') == 'murid'): ?>
		<?php $this->load->view('pages/vheadersiswa') ?>
		<?php else: ?>
			<?php $this->load->view('pages/vheader') ?>
<?php endif; ?>

	<div class="col-md-12 latar">
	<div class="box">
		<div class="col-md-4 grs-isi gcb">
			<div class="gcb grs-botom"><b>Dinas Pendidikan</b></div>
			<div class="gcb grs-botom">isi</div>
		</div>
			<div class="col-md-8 gcb grs-isi grs-botom"><b>Profile</b></div>
			<div class="col-md-8 gcb grs-isi grs-botom"><b>Isi</b></div>

	</div>
	</div>


	<?php $this->load->view('pages/vfooter') ?>
