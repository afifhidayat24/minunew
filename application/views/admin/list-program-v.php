<div class="col-md-12 ">
	<div class=" col-md-6 whitebox">
		<h4>List Program Unggulan</h4>
		<table class="table table-bordered table-hover example2">
			<thead>
				<tr class="col-menu-adm">
					<th>No</th>
					<th>Nama Program</th>
					<th>Status</th>
					<th  style="text-align:center">Action</th>
				</tr>
				<tbody>
					<?php $no=1?>
					<?php foreach ($listprogramu as $data): ?>
						<tr>
							<th><?php echo $no ?></th>
							<td><?php echo $data->nm_program ?></td>
							<td>Aktif</td>
							<td style="text-align:center"><a href="<?php echo base_url('admin/Cprogram/edit_program') ?>/<?php echo $data->id_program ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o"></i>
								Edit</a>
								<a onclick="javascript:return confirm('anda yakin ingin menghapus program unggulan');" href="<?php echo base_url('admin/Cprogram/proses_delete_program') ?>/<?php echo $data->id_program ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
									Delete</a></td>
								</tr>
								<?php $no++?>
							<?php endforeach ?>

						</tbody>
					</thead>
				</table>
			</div>

			<div class=" col-md-6 whitebox">
				<h4>List Program Ekstrakulikuler</h4>
				<table class="table table-bordered table-hover example2">
					<thead>
						<tr class="col-menu-adm">
							<th>No</th>
							<th>Nama Program</th>
							<th>Status</th>
							<th  style="text-align:center">Action</th>
						</tr>
						<tbody>
							<?php $no=1?>
							<?php foreach ($listprograme as $data): ?>
								<tr>
									<th><?php echo $no ?></th>
									<td><?php echo $data->nm_program ?></td>
									<td>Aktif</td>
									<td style="text-align:center"><a href="<?php echo base_url('admin/Cprogram/edit_program') ?>/<?php echo $data->id_program ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o"></i>
										Edit</a>
										<a onclick="javascript:return confirm('anda yakin ingin menghapus program ekstrakulikuler');" href="<?php echo base_url('admin/Cprogram/proses_delete_program') ?>/<?php echo $data->id_program ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>
											Delete</a></td>
										</tr>
										<?php $no++?>
									<?php endforeach ?>

								</tbody>
							</thead>
						</table>
					</div>

				</div>
