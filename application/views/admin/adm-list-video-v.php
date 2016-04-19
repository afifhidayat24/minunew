<div class="whitebox">
<h4>Daftar Video</h4>
<table class="table table-striped">
<thead>
    <tr class="col-menu-adm">
        <th>Sampul</th>
        <th>Judul Video</th>
        <th>Tgl. Upload</th>
        <th>Kategori</th>
        <th>Author</th>
        <th>Status</th>
        <th colspan="2" style="text-align:center">Action</th>
    </tr>
    <tbody>

       <?php foreach ($listvideo as $data): ?>
        <tr>
            <td></td>
            <td><?php echo $data->judul_video ?></td>
            <td><?php echo $data->tgl_upload ?></td>
            <td><?php echo $data->id_kategori ?></td>
            <td><?php echo $data->username ?></td>
            <td></td>
            <td style="text-align:center"><a href="">Detail</a></td>
            <td style="text-align:center"><a href="">Delete</a></td>

        </tr>
        <?php endforeach ?>

    </tbody>
</thead>
</table>
</div>
