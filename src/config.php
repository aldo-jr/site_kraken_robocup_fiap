<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '/_uploads' );

// URL da home
define( 'HOME_URI', getenv("HOME_URI") ? getenv("HOME_URI") : 'http://localhost:8082' );

// URL de uploads
define( 'UP_URI', getenv("UP_URI") ? getenv("UP_URI") : HOME_URI . '/_uploads' );

// Nome do host da base de dados
define( 'HOSTNAME', getenv("DB_HOSTNAME") ? getenv("DB_HOSTNAME") : 'db' );

// Nome do DB
define( 'DB_NAME', getenv("DB_NAME") ? getenv("DB_NAME") : 'site_kraken' );

// Usuário do DB
define( 'DB_USER', getenv("DB_USER") ? getenv("DB_USER") : 'root' );

// Senha do DB
define( 'DB_PASSWORD', getenv("DB_PASSWORD") ? getenv("DB_PASSWORD") : 'root' );

// Charset da conexão PDO
define( 'DB_CHARSET', getenv("DB_CHARSET") ? getenv("DB_CHARSET") : 'utf8' );

// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', getenv("SITE_DEBUG") ? getenv("SITE_DEBUG") : true );

/**
 * Não edite daqui em diante
 */

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';
?>