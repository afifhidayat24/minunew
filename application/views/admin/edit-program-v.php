<script src='<?php echo base_url()?>assets/js/tinymce/tinymce.min.js'></script>
<script>
tinymce.init({
    selector: '#myartikel'
});
</script>
<?php if ($this->session->flashdata('message')): ?>
    <div class="alert alert-info alert-dismissible bts-ats bts-bwh" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
    </div>
<?php endif ?>
<form action="<?php echo base_url('admin/Cprogram/proses_edit_program') ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-8">
        <h3 class="container">Edit Program</h3>
        <hr/>
        <input type="hidden" name="id_program" value="<?php echo $detailprogram->id_program ?>">
        <div class="form-group bts-ats">
            <label class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" name="nm_program" value="<?php echo $detailprogram->nm_program ?>" class="form-control" placeholder="judul">
            </div>
            <div class="sambungfloat"></div>
        </div>
        <div class="col-md-12">
            <textarea id="myartikel" name="ket_program" rows="15"><?php echo $detailprogram->ket_program ?></textarea>
        </div>
        <button type="submit" name="submit" value="submit" class="btn kanan bts-ats btn-primary bg-olive">Publish</button>
    </div>
    <div class="col-md-4">
        <div class=" form-group artikelkat">
            <div class="form-group bts-ats">
                <label class="col-sm-3 control-label">Kategori</label>
                <div class="col-sm-8">
                    <select name="kat_program" class="form-control">
                        <option value="<?php echo $detailprogram->kat_program ?>">-- <?php echo $detailprogram->kat_program ?> --</option>
                        <option value="Unggulan">Unggulan</option>
                        <option value="Ekstrakulikuler">Ekstrakulikuler</option>
                    </select>
                </div>
                <div class="sambungfloat"></div>
            </div>

            <div class="form-group bts-ats">
                <label class="col-sm-3 control-label">Gambar</label>
                <div class="col-sm-8">
                    <input type="hidden" name="gambarsaatini" value="<?php echo $detailprogram->img_program ?>">
                    <img id="preview" class="imgbox" src="<?php echo base_url('assets/img/program') ?>/<?php echo $detailprogram->img_program ?>" alt="preview gambar">
                    <input id="filedata" type="file" name="photo" accept="image/*" />
                </div>
                <div class="sambungfloat"></div>
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
