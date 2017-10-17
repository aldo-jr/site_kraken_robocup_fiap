<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<!-- Modal -->
<div class="modal fade" id="galerryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel"
     aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="galleryModalLabel">Galeria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="">
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="jumbotron text-center">
    <h1><?= $this->title; ?></h1>
  </div>

  <div class="row">
    <div class="col-md-8">

      <div class="card-columns">
        <div class="card">
          <a data-toggle="modal" data-target="#galerryModal" data-title="Título da imagem"
             data-image="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22226%22%20height%3D%22260%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20226%20260%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15e118a4973%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15e118a4973%22%3E%3Crect%20width%3D%22226%22%20height%3D%22260%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2279.7578125%22%20y%3D%22136%22%3E226x260%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
            <img class="card-img-top"
                 src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22226%22%20height%3D%22160%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20226%20160%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15e118bd9cc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15e118bd9cc%22%3E%3Crect%20width%3D%22226%22%20height%3D%22160%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2285.5%22%20y%3D%2284.8%22%3E226x160%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                 alt="Card image cap">
          </a>
        </div>
      </div>

    </div>

    <!--@TODO colocar modelo de noticias mais acessadas-->
		<?php //include("noticias_mais_acessadas.php"); ?>
  </div>
</div>

