<?php
/**
 * NoticiasController - Controller de exemplo
 *
 * @package TutsupMVC
 * @since 0.1
 */
class NoticiasController extends MainController
{
	/**
	 * Carrega a página "/views/noticias/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Notícias';
	
		// Carrega o modelo para este view
        $modelo = $this->load_model('noticias/noticias-adm-model');
				
		/** Carrega os arquivos do view **/
		
		// /views/_includes/header.php
        require ABSPATH . '/views/_includes/header.php';
		
		// /views/_includes/menu.php
        require ABSPATH . '/views/_includes/menu.php';
		
		// /views/noticias/index.php
        require ABSPATH . '/views/noticias/noticias-view.php';
		
		// /views/_includes/footer.php
        require ABSPATH . '/views/_includes/footer.php';
		
    } // index
	
} // class NoticiasController