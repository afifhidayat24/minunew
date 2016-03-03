<div class="whitebox">
<h4>Kontak Masuk</h4>
<table class="table table-bordered table-hover example2">
<thead>
	<tr class="col-menu-adm">
		<th>No</th>
		<th>Nama</th>
		<th>Telepon</th>
		<th>Email</th>
		<th>Subyek</th>
		<th  style="text-align:center">Action</th>
	</tr>
	<tbody>
		<?php $no=1?>
		<?php foreach ($getkontak as $ktk): ?>
		<tr>
			<th><?php echo $no ?></th>
			<td><?php echo $ktk->nama_k ?></td>
			<td><?php echo $ktk->no_telp_k ?></td>
			<td><?php echo $ktk->email_k ?></td>
			<td><?php $limit = $ktk->subyek_k; echo $limit = word_limiter($limit, 4); ?></td>
			<td style="text-align:center"><a href="/" class="btn btn-info"><i class="fa fa-pencil-square-o"></i>
Lihat</a>
			<a href="/" class="btn btn-danger"><i class="fa fa-trash-o"></i>
Delete</a></td>
		</tr>
		<?php $no++?>
		<?php endforeach ?>

	</tbody>
</thead>
</table>
</div>
