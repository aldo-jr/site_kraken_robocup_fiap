<?php

/**
 * Robocup
 *
 * @package TutsupMVC
 * @since 0.1
 */
class KrakengameController extends MainController {

	/**
	 * Carrega a página "/views/krakengame/index.php"
	 */
	public function index() {
		// Título da página
		$this->title = 'Krakengame';

		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg( 0 ) : array();

		// Essa página não precisa de modelo (model)

		/** Carrega os arquivos do view **/

		// /views/_includes/header.php
//		require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
//		require ABSPATH . '/views/_includes/menu.php';

		// /views/contato/contato-view.php
		require ABSPATH . '/views/krakengame/index.php';

		// /views/_includes/footer.php
//		require ABSPATH . '/views/_includes/footer.php';

	} // index

} // class KrakengameController