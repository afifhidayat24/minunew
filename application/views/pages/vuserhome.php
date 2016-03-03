<?php if ($this->session->userdata('c_status') == 'murid'): ?>
		<?php $this->load->view('pages/vheadersiswa') ?>
		<?php else: ?>
			<?php $this->load->view('pages/vheader') ?>
<?php endif; ?>
<div class="col-md-12 latar">
	<div class="box">
		<div class="col-md-4 gcb grs-isi">
			<div class="gcb grs-botom bts-ats"><h4><b>Profil Siswa</b></h4></div>
			<div class="bts-ats"><h4>Menu Siswa</h4>
				<div class="Menusiswa grs-botom"><i class="fa fa-user">&nbsp;&nbsp;</i><a href="<?php echo base_url()?>cbiosiswa/"><b>Biodata Diri</b></a></div>
				<div class="Menusiswa grs-botom"><i class="fa fa-info"></i>&nbsp;&nbsp;<a href="<?php echo base_url()?>cjadwal/"><b>Jadwal Pelajaran</a></b></div>
				<div class="Menusiswa grs-botom"><i class="fa fa-book"></i>&nbsp;&nbsp;<a href="<?php echo base_url()?>cmapel/"><b>Materi Pelajaran</a></b></div>
				<div class="Menusiswa grs-botom"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;<a href="<?php echo base_url()?>csoal/"><b>Latihan Soal</a></b></div>
				<div class="Menusiswa grs-botom"><i class="fa fa-life-ring">&nbsp;&nbsp;</i><a href="<?php echo base_url()?>cekstra/"><b>Ekskul Pilihan</a></b></div>
				<div class="Menusiswa grs-botom"><i class="fa fa-user-secret"></i>&nbsp;&nbsp;<a href="<?php echo base_url()?>cwalikelas/"><b>Guru Wali Kelas</a></b></div>
			</div>
		</div>
		<div class="col-md-8">
			<?php $this->load->view($halaman); ?>
		</div>
	</div>
</div>

<?php $this->load->view('pages/vfooter') ?>
