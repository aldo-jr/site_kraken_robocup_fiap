<?php

/**
 * Contato
 *
 * @package TutsupMVC
 * @since 0.1
 */
class ContatoController extends MainController {

	/**
	 * Carrega a página "/views/contato/index.php"
	 */
	public function index() {
		// Título da página
		$this->title = 'Contato';

		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg( 0 ) : array();

		// Essa página não precisa de modelo (model)

		/** Carrega os arquivos do view **/

		// /views/_includes/header.php
		require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
		require ABSPATH . '/views/_includes/menu.php';

		// /views/contato/contato-view.php
		require ABSPATH . '/views/contato/contato-view.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/_includes/footer.php';

	} // index

} // class ContatoController