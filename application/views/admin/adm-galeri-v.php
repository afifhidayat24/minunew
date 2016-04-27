  <form action="<?php echo base_url('admin/Cgaleri/proses_tambah_galeri') ?>" method="post" enctype="multipart/form-data">
  <div class="col-md-8 whitebox">
  <h3 class="container">Tambah Galeri</h3>
  <hr/>
      <input type="hidden" name="id_user" value="">
            <div class="form-group bts-ats">
              <label class="col-sm-2 control-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul_img" class="form-control" placeholder="judul" required>
                </div>
                <div class="sambungfloat"></div>
            </div>
            <div class="form-group bts-ats">
              <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                  <input type="text" name="ket_galeri" class="form-control" placeholder="keterangan">
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
                      <img id="preview" class="imgbox" src="<?php echo base_url('assets/img/artikel/default.jpg') ?>" alt="preview gambar">
                      <input id="filedata" type="file" name="img_galeri" accept="image/*" /required>
                    </form>
                  </div>
                <div class="sambungfloat"></div>
              </div>
          	<button type="submit" name="submit" value="submit" class="btn kanan bts-ats btn-primary">Publish</button>
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
