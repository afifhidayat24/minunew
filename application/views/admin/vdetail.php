<div class="col-md-6">
	<div class="whitebox">
  <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-info alert-dismissible bts-ats bts-bwh" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
        </div>
     <?php endif ?>
    <div class="row">
       <div class="col-md-6">
       <h4>Detail User - <?php echo $htuser->username ?></h4>
     </div>
     <div class="col-md-6">
       <button type="button" class="kanan bts-ats btn btn-primary" data-toggle="modal" data-target=".passmodal">Ubah Password</button>
     </div>
     <div class="sambungfloat"></div>
    </div>
		  <hr/>
		<form action="<?php echo base_url('admin/Cuser/proses_edit_user') ?>" method="post">
      <input type="hidden" name="id_user" value="<?php echo $htuser->id_user ?>">
			
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" value="<?php echo $htuser->username ?>" placeholder="Username">
                </div>
                <div class="sambungfloat"></div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nip</label>
                <div class="col-sm-10">
                  <input type="text" name="sid" class="form-control" value="<?php echo $htuser->sid ?>" disabled>
                </div>
                <div class="sambungfloat"></div>
            </div>
            <div class="form-group bts-ats">
              <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $htuser->tgl_lahir ?>">
                </div>
                <div class="sambungfloat"></div>
            </div>      	
            <div class="form-group bts-ats">
              <label for="inputEmail3" class="col-sm-2 control-label">No Telp</label>
                <div class="col-sm-10">
                  <input type="text" name="no_telp" class="form-control" value="<?php echo $htuser->no_telp ?>" placeholder="no_telp">
                </div>
                <div class="sambungfloat"></div>
            </div>
            <div class="form-group bts-ats">
              <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                  <select class="form-control" name="gender">
                    <option value"<?php echo $htuser->gender ?>"> <?php echo $htuser->gender ?> </option>
                    <option> </option>
                    <option value"male">L</option>
                    <option value"male">P</option>
                  </select>
                </div>
                <div class="sambungfloat"></div>
            </div>
            <div class="form-group bts-ats">
              <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="textarea" name="alamat" class="form-control" value="<?php echo $htuser->alamat ?>" placeholder="Alamat">
                </div>
                <div class="sambungfloat"></div>
            </div>
            <div class="form-group bts-ats">
              <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                  <input type="text" name="status" class="form-control" value="<?php echo $htuser->status ?>" placeholder="Status">
                </div>
                <div class="sambungfloat"></div>
            </div>
          	<button type="submit" name="submit" value="submit" class="btn kanan btn-primary">Perbarui</button>
		</form>
    <div class="sambungfloat"></div>
	</div>
</div>
<div class="col-md-6">
  <div class="whitebox">
  <h4> Photo </h4>
  <hr/>
  <form action="<?php echo base_url('admin/Cuser/proses_add_foto_profil') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_user" value="<?php echo $htuser->id_user ?>">
  <input type="hidden" name="username" value="<?php echo $htuser->username ?>">
    <div class="form-group">   
      <img id="preview" class="imgbox" src="<?php echo base_url('assets/img/userimage') ?>/<?php echo $htuser->foto_profile ?>" alt="preview gambar">
      <input id="filedata" type="file" name="fotoprofile" accept="image/*" />
      <p class="help-block"><?php echo $htuser->username ?> MI NU 2</p>
      <button id="uploadBtn" type="submit" name="submit" value="submit" class="btn kanan btn-primary">Upload</button>
    </div>
  </form>
  <div class="sambungfloat"></div> 
  </div>
</div>
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


<div class="modal fade passmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Ganti Password</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/Cuser/proses_ubah_password') ?>" method="post">
            <div class="form-group bts-ats">
              <label for="inputEmail3" class="col-sm-2 control-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_user" value="<?php echo $htuser->id_user ?>">
                  <input type="password" name="pass" class="form-control" placeholder="Masukkan Password Baru">
                </div>
                <div class="sambungfloat"></div>
            </div>    
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Ganti</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
