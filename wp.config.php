<?php
/**
 * As configura��es b�sicas do WordPress
 *
 * O script de cria��o wp-config.php usa esse arquivo durante a instala��o.
 * Voc� n�o precisa usar o site, voc� pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo cont�m as seguintes configura��es:
 *
 * * Configura��es do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configura��es do MySQL - Voc� pode pegar estas informa��es com o servi�o de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'testeMustache' );

/** Usu�rio do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na cria��o das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. N�o altere isso se tiver d�vidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves �nicas de autentica��o e salts.
 *
 * Altere cada chave para um frase �nica!
 * Voc� pode ger�-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Voc� pode alter�-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto ir� for�ar todos os
 * usu�rios a fazerem login novamente.
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
 * Voc� pode ter v�rias instala��es em um �nico banco de dados se voc� der
 * um prefixo �nico para cada um. Somente n�meros, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibi��o de avisos
 * durante o desenvolvimento. � altamente recomend�vel que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informa��es sobre outras constantes que podem ser utilizadas
 * para depura��o, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto � tudo, pode parar de editar! :) */

/** Caminho absoluto para o diret�rio WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as vari�veis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
