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
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Home';
		
		// Parametros da função
	    $modelo = $this->load_model('noticias/noticias-adm-model');

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