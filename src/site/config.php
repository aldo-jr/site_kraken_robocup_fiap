<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '/../_uploads' );

// URL da home
define( 'HOME_URI', 'http://localhost:8082/site' );

// Nome do host da base de dados
define( 'HOSTNAME', 'db' );

// Nome do DB
define( 'DB_NAME', 'site_kraken' );

// Usuário do DB
define( 'DB_USER', 'kraken' );

// Senha do DB
define( 'DB_PASSWORD', 'kraken2017' );

// Charset da conexão PDO
define( 'DB_CHARSET', 'utf8' );

// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

/**
 * Não edite daqui em diante
 */

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';
?>