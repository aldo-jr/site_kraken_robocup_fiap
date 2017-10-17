<?php

/**
 * Grupo
 *
 * @package TutsupMVC
 * @since 0.1
 */
class GrupoController extends MainController {

	/**
	 * Carrega a página "/views/grupo/index.php"
	 */
	public function index() {
		// Título da página
		$this->title = 'O Grupo';

		/** Carrega os arquivos do view **/
		// /views/_includes/header.php
		require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
		require ABSPATH . '/views/_includes/menu.php';

		// /views/contato/contato-view.php
		require ABSPATH . '/views/grupo/grupo-view.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/_includes/footer.php';

	} // index

} // class GrupoController