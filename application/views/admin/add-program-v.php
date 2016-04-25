<script src='<?php echo base_url()?>assets/js/tinymce/tinymce.min.js'></script>
<script>
tinymce.init({
    selector: '#myprogram'
});
</script>
<form action="<?php echo base_url('admin/Cprogram/proses_add_program') ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-8 whitebox">
        <h3 class="container">Tambah Program</h3>
        <hr/>
        <input type="hidden" name="id_user" value="">
        <div class="form-group bts-ats">
            <div class="col-sm-12">
                <input type="text" name="nm_program" class="form-control" placeholder="Nama Program">
            </div>
            <div class="sambungfloat"></div>
        </div>
        <div class="col-md-12">
            <textarea id="myprogram" name="ket_program" rows="15"></textarea>
        </div>
        <button type="submit" name="submit" value="submit" class="btn kanan bts-ats btn-primary">Publish</button>
    </div>
    <div class="col-md-4 whitebox">
        <div style="margin-top: 138px;" class=" form-group artikelkat">
            <div class="form-group bts-ats">
                <label class="col-sm-3 control-label">Kategori</label>
                <div class="col-sm-8">
                    <select name="kat_program" class="form-control">
                        <option> </option>
                        <option value="Unggulan">Unggulan</option>
                        <option value="Ekstrakulikuler">Ekstrakulikuler</option>
                    </select>
                </div>
                <div class="sambungfloat"></div>
            </div>
            <div class="form-group bts-ats">
                <label class="col-sm-3 control-label">Gambar</label>
                <div class="col-sm-8">
                    <form>
                        <img id="preview" class="imgbox" src="<?php echo base_url('assets/img/program/default.jpg') ?>" alt="preview gambar">
                        <input style="margin-top: 15px;" id="filedata" type="file" name="photo" accept="image/*" />
                    </form>
                    <div style="margin-top: 12px;">Jenis gambar yang anda uploud Harus .jpg .gif .png</div>
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
