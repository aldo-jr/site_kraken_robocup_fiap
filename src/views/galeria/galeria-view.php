<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<!-- Modal -->
<div class="modal fade" id="galerryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel"
     aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="galleryModalLabel">Galeria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img/>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="jumbotron text-center">
    <h1><?= $this->title; ?></h1>
  </div>

  <div class="row">
    <div class="col-md-12">

      <div class="card-columns">
        <?php for($i = 1; $i <= 16; $i++) { ?>
        <div class="card">
          <a data-toggle="modal" data-target="#galerryModal" data-title="Robo Kraken" data-image="<?php echo HOME_URI; ?>/views/_images/img<?= $i ?>.jpeg">
            <img class="card-img-top" src="<?php echo HOME_URI; ?>/views/_images/img<?= $i ?>.jpeg">
          </a>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

