<div class="whitebox">
	<h4>List Artikel</h4>
	<table class="table table-bordered table-hover example2">
		<thead>
			<tr class="col-menu-adm">
				<th>No</th>
				<th>Judul</th>
				<th>Gambar</th>
				<th>Kategori</th>
				<th>Author</th>
				<th>Status</th>
				<th  style="text-align:center">Action</th>
			</tr>
			<tbody>
				<?php $no=1?>
				<?php foreach ($listartikel as $data): ?>
					<tr>
						<th><?php echo $no ?></th>
						<td><?php $limit = $data->judul_artikel; echo $limit = word_limiter($limit, 4); ?></td>
						<td><img class="listpbox" src="<?php echo base_url('assets/img/artikel') ?>/<?php echo $data->gambar_artikel ?>" alt="preview gambar"></td>
						<td><?php echo $data->judul_kategori ?></td>
						<td><?php echo $data->username ?></td>
						<td></td>
						<td style="text-align:center"><a href="<?php echo base_url('admin/Cartikel/edit_artikel') ?>/<?php echo $data->id_artikel ?>" class="btn btn-info"><i class="fa fa-pencil-square-o"></i>
							Edit</a>
							<a onclick="javascript:return confirm('anda yakin ingin menghapus');" href="<?php echo base_url('admin/Cartikel/proses_delete_artikel') ?>/<?php echo $data->id_artikel ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>
								Delete</a></td>
							</tr>
							<?php $no++?>
						<?php endforeach ?>

					</tbody>
				</thead>
			</table>
		</div>
