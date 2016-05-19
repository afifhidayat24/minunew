<div style="margin-top:12px;" class="unirow">
  <div class="col-md-8 kontak-pad">
    <div class="">
      <h4><b>Kontak Kami</b></h4>
    </div>
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info alert-dismissible bts-ats bts-bwh" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
        </div>
    <?php endif ?>
    <form action="<?php echo base_url('ckontak/insert_kontak') ?>" method="post" enctype="multipart/form-data">
      <p>
        Apabila terdapat pertanyaan Seputar Madrasah Ibtidaiyah Nahdlatul Ulama 2 Kradenan, silahkan kirimkan pertanyaan Anda melalui pengisian form di bawah ini.
      </p>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama_k" data-toggle="tooltip" data-placement="top" title="Nama Wajib diisi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Lengkap Anda" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Telepon</label>
        <input type="text" name="no_telp_k" data-toggle="tooltip" data-placement="top" title="Telepon Wajib diisi" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nomor Telephone" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email_k" data-toggle="tooltip" data-placement="top" title="Email Wajib diisi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email Anda" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Subyek</label>
        <input type="text" name="subyek_k" class="form-control" id="exampleInputPassword1" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Pertanyaan</label>
        <textarea class="form-control" name="pertanyaan_k"  rows="8" cols="40"></textarea>
      </div>
      <div class="form-group">
        <label for="nilaiCaptcha">Captcha</label>
        <img src="assets/gambar.php" alt="Capt" />
      </div>
      <div class="form-group">
        <input name="nilaiCaptcha" class="form-control" maxlength="6" value="" placeholder="Masukan Captcha">
      </div>



      <button type="submit" class="btn btn-success">Kirim</button>
    </form>
  </div>
  <div class="col-md-4 kontak-pad">
    <h4><b>Official Sites</b></h4>
    <div class="bts-ats">
      <b>Jl. Sumber Urip
        Desa /Kecamatan : Kradenan / Purwoharjo
        Kab / Kota Banyuwangi
        Provinsi Jawa Timur</b>

        <h5 class="bts-ats"><i class="fa fa-lg fa-mobile"></i>&nbsp;&nbsp;&nbsp;&nbsp;081 357 206 306</h5>
        <h5 class="bts-ats"><i class="fa fa-lg fa-phone-square"></i>&nbsp;&nbsp;(0333) 398447</h5>
        <h5 class="bts-ats"><i class="fa fa-lg fa-facebook-square"></i>&nbsp;&nbsp;facebook</h5>
        <h5 class="bts-ats"><i class="fa fa-lg fa-twitter-square"></i>&nbsp;&nbsp;twitter</h5>
      </div>
    </div>
  </div>
  <div class="sambungfloat">

  </div>

  <script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>
