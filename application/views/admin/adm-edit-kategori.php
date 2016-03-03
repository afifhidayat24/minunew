<div class="col-md-4">
	<div class="whitebox">
		<h4>Tambah Kategori</h4>
		<form action="<?php echo base_url('admin/cpage/proses_edit_kategori') ?> " method="post">
			<div class="form-group">
    			<label>Kode Kategori</label>
          <input type="hidden" name="id_kategori" value="<?php echo $getkategori->id_kategori ?>">
    			<input type="text" name="kode_kategori" value="<?php echo $getkategori->kode_kategori ?>" class="form-control" placeholder="kode kategori" required>
  			</div>
  			<div class="form-group">
    			<label>Judul Kategori</label>
    			<input type="text" name="judul_kategori" value="<?php echo $getkategori->judul_kategori ?>" class="form-control" placeholder="judul kategori" required>
  			</div>
  			<div class="form-group">
    			<label>Keterangan Kategori</label>
    			<textarea class="form-control" name="ket_kategori" rows="4" placeholder="keterangan kategori" ><?php echo $getkategori->ket_kategori ?></textarea>
  			</div>
  			<button type="submit" class="btn btn-default" name="submit" value="submit"> Submit </button>
		</form>
	</div>
</div>