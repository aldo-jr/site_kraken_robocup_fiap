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

	/**
	 * Carrega a página "/views/contato/index.php"
	 */
	public function s() {
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


		if ( isset( $_POST['nome'] ) && isset( $_POST['email'] ) && isset( $_POST['assunto'] ) && isset( $_POST['mensagem'] ) )
		{
			$this->nome = $_POST['nome'];
			$this->email = $_POST['email'];
			$this->assunto = $_POST['assunto'];
			$this->mensagem = $_POST['mensagem'];

			$this->texto_titulo = $this->nome .", tempo perdido com sucesso!";
			$this->texto_sucesso = "<p>Obrigado por enviar um contato, mas sinto lhe informar que ninguém lerá isso!</p> <img src=\"https://t04.deviantart.net/gNqheazatD9UnSlVMUHMpUMveQs=/fit-in/700x350/filters:fixed_height(100,100):origin()/pre01/00fe/th/pre/i/2014/176/6/6/hue_hue_hue_br_by_voltrotz-d7nvrcl.png\" alt=\"\"> <hr> <p class=\"mb-0\">Volte sempre que quiser perder seu tempo! HUEHUEHUE.</p>";

			// /views/_includes/mensagem_sucesso.php
			require ABSPATH . '/views/_includes/mensagem_sucesso.php';
		} else {
			require ABSPATH . '/views/_includes/mensagem_erro.php';
		}

		// /views/contato/contato-view.php
		require ABSPATH . '/views/contato/contato-view.php';

		// /views/_includes/footer.php
		require ABSPATH . '/views/_includes/footer.php';

	} // index

} // class ContatoController