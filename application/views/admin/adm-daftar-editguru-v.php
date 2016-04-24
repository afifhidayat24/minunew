<div class="whitebox">
	<span style="font-size:20px; margin: 7px 12px;">Edit Guru</span>
	<form action="<?php echo base_url('admin/Cdaftareditguru_a/proses_update_dataguru') ?>" method="post">
		<input type="hidden" name="id_guru" value="<?php echo $detailguru->id_guru ?>">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nama Guru</label>
			<div class="col-sm-6">
				<input type="text" name="nama_guru" class="form-control" value="<?php echo $detailguru->nama_guru ?>" placeholder="Username">
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Nip</label>
			<div class="col-sm-5">
				<input type="text" name="nip" class="form-control" value="<?php echo $detailguru->nip ?>" placeholder="Masukkan NIP">
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
			<div class="col-sm-5">
				<input type="text" name="tgl_lahir" class="form-control" value="<?php echo $detailguru->tgl_lahir ?>" placeholder="Masukkan Tanggal Lahir">
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-3">
				<select class="form-control" name="gender" value="<?php echo $detailguru->gender ?>">
					<option> <?php echo $detailguru->gender ?> </option>
					<option value"male">Laki-Laki</option>
					<option value"female">Perempuan</option>
				</select>
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
			<div class="col-sm-5">
				<input type="text" name="jabatan" class="form-control" value="<?php echo $detailguru->jabatan ?>" placeholder="Masukkan Jabatan Sekarang">
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Status Guru</label>
			<div class="col-sm-5">
				<input type="text" name="status_guru" class="form-control" value="<?php echo $detailguru->status_guru ?>" placeholder="Masukkan Status">
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
			<div class="col-sm-5">
				<textarea type="text" name="alamat" class="form-control" value="<?php echo $detailguru->alamat ?>" placeholder="Masukkan Alamat Sekarang"><?php echo $detailguru->alamat ?></textarea>
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu</label>
			<div class="col-sm-5">
				<input type="text" name="nm_ibu" class="form-control" value="<?php echo $detailguru->nm_ibu ?>" placeholder="Masukkan Nama IBU">
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="form-group bts-ats">
			<label for="inputEmail3" class="col-sm-2 control-label">Kode Guru</label>
			<div class="col-sm-5">
				<input type="text" name="kode_guru" class="form-control" value="<?php echo $detailguru->kode_guru ?>" placeholder="Masukkan Kode">
			</div>
			<div class="sambungfloat"></div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			<button type="submit" name="submit" value="submit" class="btn btn-primary">Perbarui</button>
		</div>
	</form>

</div>


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
