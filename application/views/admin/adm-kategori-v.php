<div class="col-md-4">
	<div class="whitebox">
		<?php if ($this->session->flashdata('message')): ?>
			<div class="alert alert-info alert-dismissible bts-ats bts-bwh" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
			</div>
		<?php endif ?>
		<h4>Tambah Kategori</h4>
		<form action="<?php echo base_url('admin/cpage/proses_add_kategori') ?> " method="post">
			<div class="form-group">
				<label>Kode Kategori</label>
				<input type="text" name="kode_kategori" class="form-control" placeholder="kode kategori" required>
			</div>
			<div class="form-group">
				<label>Judul Kategori</label>
				<input type="text" name="judul_kategori" class="form-control" placeholder="judul kategori" required>
			</div>
			<div class="form-group">
				<label>Keterangan Kategori</label>
				<textarea class="form-control" name="ket_kategori" rows="4" placeholder="keterangan kategori" required ></textarea>
			</div>

			<button type="submit" class="btn btn-success kananbtn" name="submit" value="submit"> Submit </button>
		</form>
		<div class="sambungfloat"></div>
	</div>
</div>
<div class="col-md-8">
	<div class="whitebox">
		<?php if ($this->session->flashdata('messagehapus')): ?>
			<div class="alert alert-success alert-dismissible bts-ats bts-bwh" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('messagehapus');?></strong>
			</div>
		<?php endif ?>
		<h4>Daftar Kategori</h4>
		<table class="table table-striped">
			<thead class="col-menu-adm">
				<tr>
					<th>Kode</th>
					<th>Nama Kategori</th>
					<th>Keterangan Kategori</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($getkategori as $data): ?>
					<tr>
						<td><?php echo $data->kode_kategori ?></td>
						<td><?php echo $data->judul_kategori ?></td>
						<td><?php echo $data->ket_kategori ?></td>
						<td><a href="<?php echo base_url('admin/cpage/edit_kategori') ?>/<?php echo $data->id_kategori ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>
							edit</a></td>
							<td>
								<a onclick="javascript:return confirm('anda yakin ingin menghapus');" href="<?php echo base_url('admin/cpage/proses_delete_kategori') ?>/<?php echo $data->id_kategori ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>
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
