<?php
// Evita acesso direto a este arquivo
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="container">

	<?php
	// Número de posts por página
	$modelo->posts_por_pagina = 6;

	// Lista notícias
	$lista = $modelo->listar_noticias();
	?>
  <div class="row mb-5">
		<?php foreach ( $lista as $noticia ): ?>

			<?php
			// Verifica se estamos visualizando uma única notícia
			if ( is_numeric( chk_array( $modelo->parametros, 0 ) ) ): // single
				?>
        <div class="col">
          <!-- Título -->
          <div class="jumbotron text-center">
            <h1>
							<?php echo $noticia['noticia_titulo'] ?>
            </h1>

            <small>
							<?php echo $modelo->inverte_data( $noticia['noticia_data'] ); ?> |
							<?php echo $noticia['noticia_autor']; ?>
            </small>
          </div>
          <div class="row">
          <div class="col">
            <div class="float-left mr-3">
              <img style="max-width:300px;" src="<?php echo $noticia['noticia_imagem']; ?>">
            </div>
            <div>
							<?php echo $noticia['noticia_texto']; ?>
            </div>
          </div>
          </div>
          <div class="row mt-5">
            <div class="col text-center">
              <a class="btn btn-secondary" href="<?= HOME_URI; ?>/noticias"><< Ver mais notícias</a>
            </div>
          </div>
        </div>
			<?php else : ?>

        <div class="card col-12 col-md-4 p-0 mb-3">
          <div class="card-img-top"
               style="width:100%; height:220px;background: url(<?php echo $noticia['noticia_imagem']; ?>) center / cover no-repeat"></div>
          <div class="card-body">
            <h4 class="card-title"><?php echo $noticia['noticia_titulo'] ?></h4>
            <small class="text-muted">Publicado <?php echo $modelo->inverte_data( $noticia['noticia_data'] ); ?></small>
            <!--<p class="card-text"><?php echo $noticia['noticia_texto']; ?></p>-->
          </div>
          <div class="card-footer">
            <a href="<?php echo HOME_URI ?>/noticias/index/<?php echo $noticia['noticia_id'] ?>"
               class="btn btn-primary btn-sm btn-block">Leia mais</a>
          </div>
        </div>


			<?php endif;  // single ?>

		<?php endforeach; ?>
  </div>
	<?php $modelo->paginacao(); ?>

</div> <!-- .wrap -->
