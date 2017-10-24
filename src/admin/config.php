<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// Configurações da AWS
define( 'S3_ASSETS_BUCKET', getenv("S3_ASSETS_BUCKET"));
define( 'S3_ASSETS_REGION', getenv("S3_ASSETS_REGION"));
define( 'S3_ACCESS_KEY', getenv("S3_ACCESS_KEY"));
define( 'S3_SECRET_KEY', getenv("S3_SECRET_KEY"));

// URL da home
define( 'HOME_URI', getenv("HOME_URI").'/admin');

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