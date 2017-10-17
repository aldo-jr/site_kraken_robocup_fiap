<?php

/**
 * Galeria
 *
 * @package TutsupMVC
 * @since 0.1
 */
class GaleriaController extends MainController {

	/**
	 * Carrega a página "/views/galeria/index.php"
	 */
	public function index() {
		// Título da página
		$this->title = 'Galeria';

		/** Carrega os arquivos do view **/
		// /views/_includes/header.php
		require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
		require ABSPATH . '/views/_includes/menu.php';

		// /views/contato/contato-view.php
		require ABSPATH . '/views/galeria/galeria-view.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/_includes/footer.php';

	} // index

} // class GaleriaController