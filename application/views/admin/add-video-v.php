<form action="<?php echo base_url('admin/cvideo/proses_add_video') ?>" class="container form-horizontal" method="POST" enctype="multipart/form-data">
  <div class="col-md-8 whitebox">
    <h3>Video Pembelajaran</h3>
    <hr/>
    <div class="form-group">
      <label class="col-sm-2">Video</label>
      <div class="col-sm-10">
        <input  type="file" name="video"/>
      </div>
      <div class="sambungfloat"></div>
    </div>`
    <div class="form-group">
      <label class="col-sm-2">Sampul</label>
      <div class="col-sm-8">
        <form>
          <img id="preview" class="imgbox" src="<?php echo base_url('assets/img/artikel/default.jpg') ?>" alt="preview gambar">
          <input id="filedata" type="file" name="img_galeri" accept="image/*" />
        </form>
      </div>
      <div class="sambungfloat"></div>
    </div>
    <div class="form-group">
      <label class="col-sm-2">Judul Video</label>
      <div class="col-sm-10">
        <input type="text" name="judul_video" class="form-control" placeholder="judul video">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2">Kategori Video</label>
      <div class="col-sm-10">
        <input type="text" name="id_kategori" class="form-control" placeholder="kategori video">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 ">Sinopsis</label>
      <div class="col-sm-10">
        <textarea name="sinopsis" class="form-control" placeholder="Sinopsis"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2">Tanggal</label>
      <div class="col-sm-3">
        <input type="date" name="tgl_upload" value="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Link">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default kanan">Uploud</button>
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
