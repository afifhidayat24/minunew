<div style="margin-top:12px;" class="col-md-12">
		<div class="unirow">
			<div class="col-md-4">
				<div class="lblttlbox"><h4><b>Populer</b></h4></div>
				<?php foreach ($artbycat as $abc): ?>
					<div style="margin-top:1%; background-color:white; border-radius:3px; padding:12px;" class="">
						<div class="media">
							<div class="media-left">
								<a href="#">
									<img style="width:50px;" class="media-object" src="<?php echo base_url('assets/img/artikel');?>/<?php echo $abc->gambar_artikel ?>" alt="<?php echo $abc->gambar_artikel ?>">
								</a>
							</div>
							<div class="media-body">
								<h5 style="color: #0A3221" class="media-heading"><?php echo $abc->judul_artikel ?></h5>
								<div class="">

								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="lblttlbox"><h4><b>Info Kegiatan</b></h4></div>
				<?php foreach ($artbycat as $abc): ?>
					<div style="margin-top:1%; background-color:white; border-radius:3px; padding:12px;" style="padding:12px;" class="bts-ats">
						<div class="media">
							<div class="media-left">
								<a href="#">
									<img style="width:50px;" class="media-object" src="<?php echo base_url('assets/img/artikel');?>/<?php echo $abc->gambar_artikel ?>" alt="<?php echo $abc->gambar_artikel ?>">
								</a>
							</div>
							<div class="media-body">
								<h5 style="color: #0A3221" class="media-heading"><?php echo $abc->judul_artikel ?></h5>
								<div class="">

								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="col-md-8">
				<div class="lblttlbox"><h4><b>Berita</b></h4></div>
				<?php foreach ($artbycat as $abc): ?>
					<div style="margin-top:1%; background-color:white; border-radius:3px; padding:12px;" class="artikel bts-ats grs-botom" style="margin:10px">
						<div class="media">
							<div class="media-left">
								<a href="#">
									<img style="width:140px; margin:4px;" class="media-object" src="<?php echo base_url('assets/img/artikel');?>/<?php echo $abc->gambar_artikel ?>" alt="<?php echo $abc->gambar_artikel ?>">
								</a>
							</div>
							<div class="media-body">
								<h5 style="color: #0A3221" class="media-heading"><b><?php echo $abc->judul_artikel ?></b></h5>
								<div class="">
									<p>
										<?php
										$string = $abc->isi_artikel;
										$string = word_limiter($string, 43);
										?>
										<?php echo $string;?> <a href="<?php echo base_url()?>ctampilartikel/artikel/<?php echo $abc->id_artikel?>"><b style="color:#0A3221">read more..</b></a></b>
									</p>

								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="sambungfloat"></div>
