<?php

/**
 * Robocup
 *
 * @package TutsupMVC
 * @since 0.1
 */
class RobocupController extends MainController {

	/**
	 * Carrega a página "/views/robocup/index.php"
	 */
	public function index() {
		// Título da página
		$this->title = 'Robocup';

		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg( 0 ) : array();

		// Essa página não precisa de modelo (model)

		/** Carrega os arquivos do view **/

		// /views/_includes/header.php
		require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
		require ABSPATH . '/views/_includes/menu.php';

		// /views/contato/contato-view.php
		require ABSPATH . '/views/robocup/o-que-e-view.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/_includes/footer.php';

	} // index

	/**
	 * Carrega a página "/views/robocup/o-que-e.php"
	 */
	public function sobre() {
		// Título da página
		$this->title = 'Robocup';

		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg( 0 ) : array();

		// Essa página não precisa de modelo (model)

		/** Carrega os arquivos do view **/

		// /views/_includes/header.php
		require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
		require ABSPATH . '/views/_includes/menu.php';

		// /views/contato/contato-view.php
		require ABSPATH . '/views/robocup/o-que-e-view.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/_includes/footer.php';

	} // sobre

	/**
	 * Carrega a página "/views/robocup/regulamento.php"
	 */
	public function regulamento() {
		// Título da página
		$this->title = 'Robocup';

		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg( 0 ) : array();

		// Essa página não precisa de modelo (model)

		/** Carrega os arquivos do view **/

		// /views/_includes/header.php
		require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
		require ABSPATH . '/views/_includes/menu.php';

		// /views/contato/contato-view.php
		require ABSPATH . '/views/robocup/regulamento.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/_includes/footer.php';

	} // regulamento

} // class ContatoController