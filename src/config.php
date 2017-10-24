<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// URL da home
define( 'HOME_URI', getenv("HOME_URI"));

// Nome do host da base de dados
define( 'HOSTNAME', getenv("DB_HOSTNAME"));

// Nome do DB
define( 'DB_NAME', getenv("DB_NAME"));

// Usuário do DB
define( 'DB_USER', getenv("DB_USER"));

// Senha do DB
define( 'DB_PASSWORD', getenv("DB_PASSWORD"));

// Charset da conexão PDO
define( 'DB_CHARSET', getenv("DB_CHARSET"));

// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', getenv("SITE_DEBUG"));

/**
 * Não edite daqui em diante
 */

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';
?>