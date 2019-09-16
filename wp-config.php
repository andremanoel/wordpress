<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f(k>/*pI%eECt$&~D/Ts_SNUo=YV[bj!NI/ ?HV_qSHmy9jCn4#LL%.^`VJA&F2B' );
define( 'SECURE_AUTH_KEY',  'EF_XHQnF8;ak)6n.YY^ic8&+>C8mayShz(6?mXWnzukW7_h%w/a5Kx~Ty4 Q_!H/' );
define( 'LOGGED_IN_KEY',    '23TOOC=X!^S;xv87ZpP<(}f*X@Q*0<uBZs9VhaF$/;HrSH7,dx[_vG/wv%B4@MIv' );
define( 'NONCE_KEY',        'Fpf .-_ ID2GJ.*+AT5)m1Qs<d<?=&|@[=ca9J}{Ij-j%zOywSaU:`z%1O7IFNxm' );
define( 'AUTH_SALT',        'OZ6/m}5jcCr_7ub-_F&,:x?0oC~<AKEQ:(l_x>(=fr6GTGfP+[=%*PKG<_c&{)_*' );
define( 'SECURE_AUTH_SALT', 'iOauX_nqfQO/}kC13i?sl|L;k8Cv4~I]IrF`Zh;ztG4ZATA*$H8]s?Oh1eihG&yc' );
define( 'LOGGED_IN_SALT',   'zxus3FCtX[yrn7ly5pk=x:on&k;~y)+qbU h}sAn_gX:nZBMnkqQgDpEd[|MMx9w' );
define( 'NONCE_SALT',       'Ig9,3A3L11]j|[0C03uAXtf(}Hz+$THfNJq!i^VEpJsH-eQ0kr^v*a:7;%%!}oLr' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
