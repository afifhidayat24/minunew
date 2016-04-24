<div class="whitebox">
	<span style="font-size:20px; margin: 7px 12px;">Daftar Guru</span><button type="button" style="margin: 7px 12px;" class="btn btn-default" data-toggle="modal" data-target="#myModal">Tambah Guru</button>
	<table class="table table-striped">
		<thead>
			<tr class="col-menu-adm">
				<th>Image</th>
				<th>Nama</th>
				<th>Nip</th>
				<th>Kode Guru</th>
				<th>Tanggal Lahir</th>
				<th>Jabatan</th>
				<th>Gender</th>

				<th colspan="2" style="text-align:center">Action</th>
			</tr>
			<tbody>
				<?php foreach ($gurudata as $guru): ?>
					<tr>
						<td><img class="listpbox" src="<?php echo base_url('assets/img/guru') ?>/<?php echo $guru->photo ?>" alt="preview gambar"></td>
						<td><?php echo $guru->nama_guru ?></td>
						<td><?php echo $guru->nip ?></td>
						<td><?php echo $guru->kode_guru ?></td>
						<td><?php echo $guru->tgl_lahir ?></td>
						<td><?php echo $guru->jabatan ?></td>
						<td><?php echo $guru->gender ?></td>
						<td style="text-align:center"><a href="<?php echo base_url('admin/Cdaftareditguru_a/edit_guru') ?>/<?php echo $guru->id_guru ?>"class="btn btn-info">Detail</a></td>
						<td style="text-align:center"><a onclick="javascript:return confirm('anda yakin ingin menghapus');" href="<?php echo base_url('admin/Cdaftarguru_a/proses_delete_guru') ?>/<?php echo $guru->id_guru ?>"class="btn btn-danger"data-toggle="modal">Delete</a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</thead>
	</table>
</div>


<!-- Modal -->
<form action="<?php echo base_url('admin/Cdaftarguru_a/proses_add_dataguru') ?>" method="post" enctype="multipart/form-data">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Identitas Guru</h4>
			</div>
			<div class="modal-body">

					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" name="nama_guru" class="form-control" id="exampleInputEmail1" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Nip</label>
						<input type="text" name="nip"class="form-control" id="exampleInputPassword1" placeholder="Nip">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Tanggal Lahir</label>
						<input type="datetime" name="tgl_lahir" class="form-control" id="exampleInputPassword1" placeholder="tgl lahir">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Alamat</label>
						<textarea type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">No Telp</label>
						<input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="No telp">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Gender</label>
						<input type="text" name="gender" class="form-control" id="exampleInputPassword1" placeholder="No telp">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Kode Guru</label>
						<input type="text" name="kode_guru" class="form-control" id="exampleInputPassword1" placeholder="No telp">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Jabatan</label>
						<input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Jabatan Sekarang">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Sinopsis</label>
						<textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Foto Profile</label></br>
	                        <img id="preview" class="imgbox" src="<?php echo base_url('assets/img/program/default.jpg') ?>" alt="preview gambar">
	                        <input id="filedata" name="photo" type="file" accept="image/*" />
						<p class="help-block">Gunakan Gambar Asli Anda haha</p>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
</form>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$('#filedata').change(function(){
    readURL(this);
});
</script>
