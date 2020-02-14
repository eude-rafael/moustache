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
define( 'DB_NAME', 'testeMustache' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1T.EAp$r{df9<m1,!5TNCXy9V-<Bq/O=Oj4sTcp?n5iLi:A91|0bkoA7OqY69q4C' );
define( 'SECURE_AUTH_KEY',  '$D.<dr)FL3d<0-RD>-ORI!k~m;t4@G@*$%r^koyfn>?HfXsyaSnR#}U5ZLprG+xC' );
define( 'LOGGED_IN_KEY',    'Z_ampLJ)_Sid}3SxaS:2S(%gx2+?+#0zP-w#0,}#>N3+-]9AAH*smP4Q)?DGm4,^' );
define( 'NONCE_KEY',        '0qaKPzO9*Q8IrI8 z&J.A=ILNsR+UN=?Wr(7)Ia#sM<%z&y2$nWrLef?K.t#B69X' );
define( 'AUTH_SALT',        '.4{C# fT}}|Ri_z8~<m`V(^6g;bG!UeH:>gI 3ApoR_8,TG5O06%]# wsl/aORU{' );
define( 'SECURE_AUTH_SALT', 'py90n:f$7bDt?.q$7:G)gpc;BTKDR](1X~p%Db{J&im)FLH(Iu-QB*5`Ida?9aCm' );
define( 'LOGGED_IN_SALT',   'mHV NXFd2Q]}S*<CcH3A9shYotO<_I)$[yv&7*h&!C^WqGg~@$w55+jK/PwVNISL' );
define( 'NONCE_SALT',       'Y8_2 @{z{r|Id%Zt`8X(4P0wM`25ynwF;6SDpw=wyfIA11NGB,Ih4o;$NSDfp%W:' );

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
