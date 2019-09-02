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
define('DB_NAME', 'bkp_ric');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/ric/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/ric/');



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
define('AUTH_KEY',         '3XRtR/6GqPhNqkMTl}DYtgQ~DsZQArd2 r4Ss)s: SrUU5suEhC7Z[4bN>)9bLN&');
define('SECURE_AUTH_KEY',  '~mh>~`hdP}9IPgN2wm&vkH!f@h,f6XH2T92d, 2)]x?Awsa6NlEcmiMnLgpeOB5k');
define('LOGGED_IN_KEY',    'RR}$W[}Zrv+[yT{]:zIg.X=XHUHKHgN@Wr?/]sq?]PR~2lP5|5j[Py],mKWBYY6b');
define('NONCE_KEY',        ']dh-CCgUWAf7,n[AE^vF6sm<hmswXiTi>kVwOpfrsS]k[0*(}|]f:_s!$5Mr}%o?');
define('AUTH_SALT',        '2O#z`Vfx^=RNj#FA@!?%kIup}gJV!zq~ dmW,g:L;=nv>`bs7s~XSyHJR`VX3mu:');
define('SECURE_AUTH_SALT', 'v|N+D9:?[e|Bp_X/Mr=%Xcnet1W7E&3HLc7bk-TzcpcF&(6`QuH%MK 3T#E0Dure');
define('LOGGED_IN_SALT',   'f@;BG&2A{v0KkeKl)9mP!:~TzCNx /=8_$doH|$K:WK.zkkCHZvO=G{Dvcf0fe81');
define('NONCE_SALT',       'auG.:6DWu|E8=[PbmUrZ0EO`FQs1a`o>`-jak>d_{s$lti^o[:Txs[sZlyO8Wvm|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ric_';

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

define ('WPCF7_AUTOP', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
