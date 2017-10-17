<?php
// Evita acesso direto a este arquivo
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="container">

	<?php
	// Número de posts por página
	$modelo->posts_por_pagina = 10;

	// Lista notícias
	$lista = $modelo->listar_noticias();
	?>

	<?php foreach ( $lista as $noticia ): ?>

		<?php
		// Verifica se estamos visualizando uma única notícia
		if ( is_numeric( chk_array( $modelo->parametros, 0 ) ) ): // single
			?>

      <!-- Título -->
      <h1>
				<?php echo $noticia['noticia_titulo'] ?>
      </h1>


      <p>
				<?php echo $modelo->inverte_data( $noticia['noticia_data'] ); ?> |
				<?php echo $noticia['noticia_autor']; ?>
      </p>

      <p>
        <img src="<?php echo $noticia['noticia_imagem']; ?>">
      </p>

			<?php echo $noticia['noticia_texto']; ?>
		<?php else : ?>

      <!-- Título -->
      <h1>
        <a href="<?php echo HOME_URI ?>/noticias/index/<?php echo $noticia['noticia_id'] ?>">
					<?php echo $noticia['noticia_titulo'] ?>
        </a>
      </h1>
		<?php endif;  // single ?>

	<?php endforeach; ?>

	<?php $modelo->paginacao(); ?>

</div> <!-- .wrap -->
