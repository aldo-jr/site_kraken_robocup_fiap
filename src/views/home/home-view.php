<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>


<div class="container">
  <div class="jumbotron text-center">
    <h1><?php echo $this->title; ?></h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">

      <h2>Últimas Notícias</h2>
      <hr>


      <div class="row p-3">
	      <?php
	      // Número de posts por página
	      $modelo->posts_por_pagina = 6;

	      // Lista notícias
	      $lista = $modelo->listar_noticias();
	      ?>
				<?php foreach ( $lista as $noticia ): ?>

          <div class="card col-12 col-md-4 p-0 mb-3">
            <div class="card-img-top"
                 style="width:100%; height:220px;background: url(<?php echo $noticia['noticia_imagem']; ?>) center / cover no-repeat"></div>
            <div class="card-body">
              <h4 class="card-title"><?php echo $noticia['noticia_titulo'] ?></h4>
              <small class="text-muted">
                Publicado <?php echo $modelo->inverte_data( $noticia['noticia_data'] ); ?></small>
            </div>
            <div class="card-footer">
              <a href="<?php echo HOME_URI ?>/noticias/index/<?php echo $noticia['noticia_id'] ?>"
                 class="btn btn-primary btn-sm btn-block">Leia mais</a>
            </div>
          </div>


				<?php endforeach; ?>
      </div>

    </div>

    <div class="col-md-4 text-center">
      <img class="mt-5" src="<?php echo HOME_URI; ?>/views/_images/krakenimage01.png" alt="">
      <h3>Release the Kraken!</h3>
    </div>
  </div>
</div>