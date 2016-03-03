<div class="whitebox">
	<h4>Daftar Siswa</h4>

	<table class="table table-bordered table-hover example2">
		<thead>
			<tr class="col-menu-adm">
				<th>Image</th>
				<th>Nama</th>
				<th>Nis</th>
				<th>Tgl. Lahir</th>
				<th>Wali Murid</th>
				<th>Gender</th>
				<th>Status</th>
				<th style="text-align:center">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($siswadata as $siswa): ?>
			<tr>
				<td><img class="listpbox" id="preview" src="<?php echo base_url('assets/img/userimage') ?>/<?php echo $siswa->foto_profile ?>" alt="preview gambar"></td>
				<td><?php echo $siswa->username ?></td>
				<td><?php echo $siswa->sid ?></td>
				<td><?php echo $siswa->tgl_lahir ?></td>
				<td><?php echo $siswa->wali_murid ?></td>
				<td><?php echo $siswa->gender ?></td>
				<td><?php echo $siswa->status ?></td>
				<td style="text-align:center"><a href=""class="btn btn-sm btn-info"> <i class="fa fa-pencil-square-o"></i> Detail</a> |  <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>&nbsp;Delete</a></td>

			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

</div>

