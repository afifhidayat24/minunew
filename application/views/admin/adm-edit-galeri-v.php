<?php if ($this->session->flashdata('message')): ?>
    <div class="alert alert-info alert-dismissible bts-ats bts-bwh" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
    </div>
<?php endif ?>

<form action="<?php echo base_url('admin/Cgaleri/proses_edit_galeri') ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-8 whitebox">
        <h3 class="container">Edit Galeri</h3>
        <hr/>
        <input type="hidden" name="id_galeri" value="<?php echo $editgaleri->id_galeri ?>">
        <div class="form-group bts-ats">
            <label class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" name="judul_img" class="form-control" value="<?php echo $editgaleri->judul_img ?>">
            </div>
            <div class="sambungfloat"></div>
        </div>
        <div class="form-group bts-ats">
            <label class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" name="ket_galeri" class="form-control" value="<?php echo $editgaleri->ket_galeri ?>">
            </div>
            <div class="sambungfloat"></div>
        </div>
        <div class="form-group bts-ats">
            <label class="col-sm-2 control-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" name="tgl_upload" class="form-control" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="sambungfloat"></div>
        </div>
        <div class="form-group bts-ats">
            <label class="col-sm-2 control-label">Gambar</label>
            <div class="col-sm-8">
                <form>
                    <input type="hidden" name="gambarsaatini" value="<?php echo $editgaleri->img_galeri ?>">
                    <img id="preview" class="imgbox" src="<?php echo base_url('assets/img/galeri') ?>/<?php echo $editgaleri->img_galeri ?>" alt="preview gambar">
                    <input id="filedata" type="file" name="img_galeri" accept="image/*" />
                </form>
            </div>
            <div class="sambungfloat"></div>
        </div>
        <button type="submit" name="submit" value="submit" class="btn kanan bts-ats btn-primary">Perbarui</button>
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
