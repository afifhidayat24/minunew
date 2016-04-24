
<div class="col-md-8 kontak-pad">
    <div class="">
        <h4><b>FREQUENTLY ASKED QUESTIONS</b></h4>
    </div>
    <form action="<?php echo base_url('admin/Cfaq/insert_faq') ?>" method="post" enctype="multipart/form-data">
        <p>
            Pertanyaan Yang Sering Muncul dari para Pengunjung.
        </p>
        <div class="form-group">
            <label for="exampleInputPassword1">Pertanyaan</label>
            <input type="text" name="subyek_faq" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jawaban</label>
            <textarea class="form-control" name="keterangan_faq"  rows="8" cols="40"></textarea>
        </div>
        <button type="submit" class="btn btn-info kananbtn">Tampilkan</button>
    </form>
</div>
