
<div class="col-md-8">
	<div class="whitebox">
		<h4>Daftar Page</h4>
		<div class="btn btn-default">
			<a href="<?php echo base_url('admin/cpage/select_pageisi') ?>">Tambah Page</a>
		</div>
		<table class="table table-striped">
			<thead class="col-menu-adm">
				<tr>
					<th>Judul Page</th>
					<th>Isi Page</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($getpage as $data): ?>
					<tr>
						<td><?php echo $data->judul_page ?></td>
						<td><?php echo $data->isi_page ?></td>
						<td><a onclick="javascript:return confirm('anda yakin ingin merubah data page');" href="" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>edit</a></td>
						<td><a onclick="javascript:return confirm('anda yakin ingin menghapus');" href="<?php echo base_url('admin/cpage/proses_delete_page') ?>/<?php echo $data->id_page ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>
							delete</a></td>
						</tr>
					<?php endforeach ?>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
