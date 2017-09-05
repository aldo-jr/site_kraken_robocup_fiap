<?php
/**
 * home - Controller de exemplo
 *
 * @package TutsupMVC
 * @since 0.1
 */
class HomeController extends MainController
{

    /**
     * $login_required
     *
     * Se a página precisa de login
     *
     * @access public
     */
    public $login_required = true;

	/**
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Home';

        // Verifica se o usuário está logado
        if ( ! $this->logged_in ) {

            // Se não; garante o logout
            $this->logout();

            // Redireciona para a página de login
            $this->goto_login();

            // Garante que o script não vai passar daqui
            return;

        }
		
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
	
		// Essa página não precisa de modelo (model)
		
		/** Carrega os arquivos do view **/
		
		// /views/_includes/header.php
        require ABSPATH . '/views/_includes/header.php';
		
		// /views/_includes/menu.php
        require ABSPATH . '/views/_includes/menu.php';
		
		// /views/home/home-view.php
        require ABSPATH . '/views/home/home-view.php';
		
		// /views/_includes/footer.php
        require ABSPATH . '/views/_includes/footer.php';
		
    } // index
	
} // class HomeController