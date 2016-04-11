<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MI NU 2 Kradenan</title>
	<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>assets/css/video-js.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php echo base_url('assets/logo/logo.png'); ?>" alt="minu2 Brand">
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/assets/js/videojs-ie8.min.js"></script>
	<link href="<?php echo base_url()?>assets/css/minu2.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="uninavtop">
		<div class="mainbox">
			<div class="col-md-4 paddingnone">
				<a href="#" class="unimedsos"><i class="fa fa-facebook"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-twitter"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-instagram"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-youtube"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-google-plus"></i></a>
				<div class="sambungfloat"></div>
			</div>
			<div class="col-md-8 paddingnone">
				<div class="unimenav kanan"><a href="<?php echo base_url()?>chome/"><i class="fa fa-phone-square"></i> Layanan</a></div>
				<div class="unimenav kanan"><a href="<?php echo base_url()?>cfaq/"><i class="fa fa-suitcase"></i> FAQ </a></div>
				<div class="unimenav kanan"><a href="<?php echo base_url()?>chome/"><i class="fa fa-mortar-board"></i> Akademik</a></div>
				<div class="unimenav kanan"><a href="<?php echo base_url()?>cfasilitas/"><i class="fa fa-bell"></i> Fasilitas</a></div>
				<div class="unimenav kanan"><a href="<?php echo base_url()?>cmoto/"><i class="fa fa-sitemap"></i> Organisasi</a></div>
				<div class="unimenav kanan"><a href="<?php echo base_url()?>csejarah/"><i class="fa fa-university"></i> Tentang Kami</a></div>
			</div>
			<div class="sambungfloat"></div>
		</div>
	</div>
	<header class="bgheader">
		<div class="mainbox">
			<div class="col-md-1 unipd">
				<div class="unidayanbrand">
					<img style="height:90px; padding-top:6px;" class="brandsize" src="<?php echo base_url('assets/img/logo.png'); ?>" width="100%" alt="Minu" title="Home"></div>
				</div>
				<div class="col-md-8 unipd">
					<h2 class="taglineuni"><?php echo $taglineuni; ?></h2>
					<h1 class="unibrand bbrand"><?php echo $title; ?></h1>
					<h4 class="alamatminu"><?php echo $alamat; ?></h4>
					<nav class="unimenavbox">
						<div class="unimenavu"><a href="<?php echo base_url()?>chome/">Home</a></div>
						<div class="unimenavu"><a href="<?php echo base_url()?>cblog/">Berita</a></div>
						<div class="unimenavu"><a href="<?php echo base_url()?>chome/">Agenda</a></div>
						<div class="unimenavu"><a href="<?php echo base_url()?>cpengajar/">Pengajar</a></div>
						<div class="unimenavu"><a href="<?php echo base_url()?>cekstra/">Program Ekstra</a></div>
						<div class="unimenavu"><a href="<?php echo base_url()?>cunggul/">Program Unggulan</a></div>
						<div class="unimenavu"><a href="<?php echo base_url()?>ckontak/">Kontak Kami</a></div>
						<div class="sambungfloat"></div>
					</nav>
				</div>
				<div style="margin-top:28px; text-align:center;" class="col-md-3 unipd">
						<img src="<?php echo base_url('assets/img/DAFTAR-ONLINE-PSB.png'); ?>" height="120px;" width="90%" alt="" />
					<div class="sambungfloat"></div>
				</div>
				<div class="sambungfloat"></div>
			</div>
		</header>
		<div class="mainbox bts-ats">
			<?php $this->load->view($halaman); ?>
		</div>
		<footer class="unifooter">
			<div class="mainbox">
				<div class="unirow">
					<div class="col-md-4 unipd">
						<div class="bixbox2">
							<div class="lblttlbox ftrttl"><i class="fa fa-user"></i> Sambutan Kepala Madrasah</div>
							<div class="media">
								<div class="media-left media-top">
									<a href="#"><img class="media-object" src="<?php echo base_url('assets/img/homepage/MIFTAHUL HADI, S.Pd.I..jpg'); ?>" alt="Rektor Unidayan"></a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Sambutan Bpk. Miftahul Hadi S.pd.i</h4>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in ...
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 unipd">
						<h4 class="lblttldefault">MEDIA PARTNER</h4>
						<div class="isidefault">Dinas Pendidikan Banyuwangi</div>
						<div class="isidefault">Dinas Kebudayaan Banyuwangi</div>
						<div class="isidefault">KUA Purwoharjo</div>
						<div class="isidefault">Kementrian Agama Kab.Banyuwangi</div>
					</div>
					<div class="col-md-2 unipd">
						<h4 class="lblttldefault">ORGANISASI SISWA</h4>
						<div class="isidefault">MI NU 2 Marcing Band</div>
						<div class="isidefault">Ambalan MI NU 2</div>
						<div class="isidefault">Hadrah Assalam</div>
					</div>
					<div class="col-md-2 unipd">
						<h4 class="lblttldefault">BAHASA</h4>
						<div class="isidefault">Indonesia</div>
						<div class="isidefault">Inggris</div>
						<div class="isidefault">Jawa</div>
						<div class="isidefault">Osing</div>
					</div>
					<div class="col-md-2 unipd">
						<h4 class="lblttldefault">OFFICIAL SITES</h4>
						<div class="isidefault">Telepon : (0333) 398447 </div>
						<div class="isidefault">E-mail : minu.dua.krd@gmail.com</div>
						<div class="isidefault">Peta Lokasi :
							<a href="#"><b>KLIK DISINI</b></a>
						</div>
					</div>
					<div class="sambungfloat"></div>
				</div>
			</div>
			<div class="unicopy">
				<div class="mainbox">
					<div class="kiri">Copyright © 2016 <?php echo $title; ?></div>
					<div class="kanan"></div>
					<div class="sambungfloat"></div>
				</div>
			</div>
		</footer>
	</body>
	</html>
