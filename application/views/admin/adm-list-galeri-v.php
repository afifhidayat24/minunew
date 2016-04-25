<div class="whitebox">
	<h4>Daftar Galeri MINU 2</h4>
	<table class="table table-bordered table-hover example2">
		<thead>
			<tr class="col-menu-adm">
				<th>No</th>
				<th>Gambar</th>
				<th>Judul</th>
				<th>Author</th>
				<th>Status</th>
				<th  style="text-align:center">Action</th>
			</tr>
			<tbody>
				<?php $no=1?>
				<?php foreach ($listgaleri as $dtgaleri): ?>
					<tr>
						<th><?php echo $no ?></th>
						<td><img src="<?php echo base_url('assets/img/galeri')  ?>/<?php echo $dtgaleri->img_galeri ?>" width="10%"></td>
						<td><?php $limit = $dtgaleri->judul_img; echo $limit = word_limiter($limit, 4); ?></td>
						<td>Admin</td>
						<td></td>
						<td style="text-align:center"><a href="" class="btn btn-info"><i class="fa fa-pencil-square-o"></i>
							Edit</a>
							<a onclick="javascript:return confirm('anda yakin ingin menghapus');" href="" class="btn btn-danger"><i class="fa fa-trash-o"></i>
								Delete</a></td>
							</tr>
							<?php $no++?>
						<?php endforeach ?>

					</tbody>
				</thead>
			</table>
		</div>
