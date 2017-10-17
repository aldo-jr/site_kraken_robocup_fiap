<?php
/**
 * Logout
 *
 * @package TutsupMVC
 * @since 0.1
 */
class LogoutController extends MainController
{

	public function index() {
			$this->logout();

			// Redireciona para a página de login
			$this->goto_page(HOME_URI);

			// Garante que o script não vai passar daqui
			return;
	} // index

} // class LogoutController