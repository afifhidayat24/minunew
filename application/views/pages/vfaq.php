<div style="margin-top:12px;" class="unirow">
  <div class="faq-pad">
    <h4><b>FREQUENTLY ASKED QUESTIONS</b></h4>
    <p>
      Berikut ini adalah daftar pertanyaan dan jawaban untuk hal-hal yang sering ditanyakan mengenai MINU 2 Keradenan.
      Jika Anda masih memiliki pertanyaan Yang Berbeda namun tidak tertera di bawah ini,Silahkan Anda dapat menghubungi di <b>Kontak</b> kami.
    </p>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?php foreach ($chatfaq as $chf): ?>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="h<?php echo $chf->id_faq ?>">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $chf->id_faq ?>" aria-expanded="true" aria-controls="collapseOne">
                <?php echo $chf->subyek_faq ?>
              </a>
            </h4>
          </div>
          <div id="<?php echo $chf->id_faq ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="h<?php echo $chf->id_faq ?>">
            <div class="panel-body">
              <?php echo $chf->keterangan_faq ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<div class="sambungfloat">

</div>
