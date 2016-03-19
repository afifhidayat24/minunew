<div class="col-md-4">
	<div class="whitebox">
		<?php if ($this->session->flashdata('message')): ?>
			<div class="alert alert-info alert-dismissible bts-ats bts-bwh" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
			</div>
		<?php endif ?>
		<h4>Tambah Page</h4>
		<form action="<?php echo base_url('admin/cpage/proses_add_page') ?>" method="post">
			<div class="form-group">
				<label>Judul Page</label>
				<input type="text" name="judul_page" class="form-control" placeholder="judul page">
			</div>
			<div class="form-group">
				<label>Isi Page</label>
				<textarea class="form-control" name="isi_page" rows="4" placeholder="isi page" ></textarea>
			</div>
			<div class="form-group">
				<label>kode Page</label>
				<select class="form-control" name="id_kategori">
					<option>-- pilih kategori</option>
					<?php foreach ($getkategori as $data): ?>
						<option value="<?php echo $data->id_kategori ?>"><?php echo $data->judul_kategori ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<button type="submit" class="btn btn-success kananbtn" name="submit" value="submit"> Submit </button>
			<div class="sambungfloat"></div>
		</form>
	</div>
</div>
<div class="col-md-8">
	<div class="whitebox">
		<h4>Daftar Page</h4>
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
						<td><a href="" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>edit</a></td>
						<td><a href="<?php echo base_url('admin/cpage/proses_delete_page') ?>/<?php echo $data->id_page ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>
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
