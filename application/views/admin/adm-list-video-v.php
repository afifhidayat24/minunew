<div class="whitebox">
<h4>Daftar Video</h4>
<table class="table table-bordered table-hover example2">
<thead>
    <tr class="col-menu-adm">
        <th>No</th>
        <th>Judul Video</th>
        <th>Tgl Publikasi</th>
        <th>Label</th>
        <th>Author</th>
        <th>Status</th>
        <th style="text-align:center">Action</th>
    </tr>
    <tbody>
    <?php $no=1?>
       <?php foreach ($listvideo as $data): ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data->judul_video ?></td>
            <td><?php echo $data->tgl_upload ?></td>
            <td><?php echo $data->id_kategori ?></td>
            <td><?php echo $data->username ?></td>
            <td>Published</td>
            <td style="text-align:center"><a href="" class="btn btn-info">Detail</a>
            <a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php $no++?>
        <?php endforeach ?>
    </tbody>
</thead>
</table>
</div>
