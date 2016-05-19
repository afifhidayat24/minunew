<script src='<?php echo base_url()?>assets/js/tinymce/tinymce.min.js'></script>
 <script>
 tinymce.init({
   selector: '#myisipage'
 });
 </script>
<div class="col-md-8">
	<div class="whitebox">
		<?php if ($this->session->flashdata('message')): ?>
			<div class="alert alert-info alert-dismissible bts-ats bts-bwh" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-check-circle"></i> <strong><?php echo $this->session->flashdata('message');?></strong>
			</div>
		<?php endif ?>
		<h4>Tambah Page</h4>
		<form action="<?php echo base_url('admin/cpage/proses_add_page') ?>" method="post">
			<div class="form-group">
				<label>Judul Page</label>
				<input type="text" name="judul_page" class="form-control" placeholder="judul page" required>
			</div>
			<div class="form-group">
				<label>icon Page</label>
				<input type="text" name="icon_page" class="form-control" placeholder="icon page" required>
			</div>
			<div class="">
    			  <textarea id="myisipage" name="isi_artikel" rows="15"></textarea>
  			</div>
			<div class="sambungfloat"></div>
			<button type="submit" class="btn btn-success kananbtn" name="submit" value="submit"> Submit </button>
			<div class="sambungfloat"></div>
		</form>
	</div>
</div>
