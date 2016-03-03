<div class="whitebox">
<h4>Daftar Guru</h4>
<table class="table table-striped">
<thead>
	<tr class="col-menu-adm">
		<th>Image</th>
		<th>Nama</th>
		<th>Nip</th>
		<th>Email</th>
		<th>No Telp.</th>
		<th>Gender</th>
		<th>Jabatan</th>
		<th colspan="2" style="text-align:center">Action</th>
	</tr>
	<tbody>
		<?php foreach ($gurudata as $guru): ?>
				<tr>
			<td><img class="listpbox" id="preview" src="<?php echo base_url('assets/img/userimage') ?>/<?php echo $guru->foto_profile ?>" alt="preview gambar"></td>
			<td><?php echo $guru->username ?></td>
			<td><?php echo $guru->sid ?></td>
			<td><?php echo $guru->email ?></td>
			<td><?php echo $guru->no_telp ?></td>
			<td><?php echo $guru->gender ?></td>
			<td><?php echo $guru->status ?></td>
			<td style="text-align:center"><a href=""class="btn btn-info"data-toggle="modal" data-target=".<?php echo $guru->id_user ?>">Detail</a></td>
			<td style="text-align:center"><a href="">Delete</a></td>
		</tr>
		<div class="modal fade <?php echo $guru->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">Edit Data Guru</h4>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('admin/Cdaftarguru_a/proses_update_dataguru') ?>" method="post">
							<input type="hidden" name="id_user" value="<?php echo $guru->id_user ?>">
							 <div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-6">
											<input type="text" name="username" class="form-control" value="<?php echo $guru->username ?>" placeholder="Username">
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Nip</label>
										<div class="col-sm-5">
											<input type="text" name="nip" class="form-control" value="<?php echo $guru->nip ?>" placeholder="Masukkan NIP">
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
										<div class="col-sm-5">
											<input type="text" name="tgl_lahir" class="form-control" value="<?php echo $guru->tgl_lahir ?>" placeholder="Masukkan Tanggal Lahir">
										</div>
										<div class="sambungfloat"></div>
								</div>
							 <div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
										<div class="col-sm-3">
											<select class="form-control" name="gender" value="<?php echo $guru->gender ?>">
												<option> </option>
												<option value"male">L</option>
												<option value"female">P</option>
											</select>
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
										<div class="col-sm-5">
											<input type="text" name="jabatan" class="form-control" value="<?php echo $guru->jabatan ?>" placeholder="Masukkan Jabatan Sekarang">
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Status Guru</label>
										<div class="col-sm-5">
											<input type="text" name="status_guru" class="form-control" value="<?php echo $guru->status_guru ?>" placeholder="Masukkan Status">
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
										<div class="col-sm-5">
											<textarea name="alamat" class="form-control" value="<?php echo $guru->alamat ?>" placeholder="Masukkan Alamat Sekarang"></textarea>
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu</label>
										<div class="col-sm-5">
											<input type="text" name="nm_ibu" class="form-control" value="<?php echo $guru->nm_ibu ?>" placeholder="Masukkan Nama IBU">
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
										<div class="col-sm-3">
											<select class="form-control" id="status" name="status" placeholder="Status">
												<option> </option>
												<option value="guru">Guru</option>
												<option value="admin">Admin</option>
												<option value="murid">Murid</option>
											</select>
										</div>
										<div class="sambungfloat"></div>
								</div>
								<div class="form-group bts-ats">
									<label for="inputEmail3" class="col-sm-2 control-label">Kode Guru</label>
										<div class="col-sm-5">
											<input type="text" name="kode_guru" class="form-control" value="<?php echo $guru->kode_guru ?>" placeholder="Masukkan Kode">
										</div>
										<div class="sambungfloat"></div>
								</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</tbody>
</thead>
</table>
</div>
