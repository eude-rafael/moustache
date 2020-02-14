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
define( 'AUTH_KEY',         '$Z4V39AQIbV.E*i.V0Z1HMR>*BwZ6Aod_%<t{:0#k&%kc7AIPn7t$_EK_LI{b#wZ' );
define( 'SECURE_AUTH_KEY',  'zU QiLQMjt/KHvZl:Z53o<!hkdT{0N0!*MIuIxHO/^qJM]akJgYrK)%nSgCd]b7<' );
define( 'LOGGED_IN_KEY',    'b35DpFDV)?;t:(jh-ZRrH.A$^J3|rkI(VC4,a)((+QC{d@T/1m&xY~^mw_xWp+5W' );
define( 'NONCE_KEY',        'X8I{|UO<59x g^_*48)lIA(DuJ<1|HEG8)yK[&!JbFse5= Eb2MO_}UU@4yZ<KuQ' );
define( 'AUTH_SALT',        '<[L&{Z2D1jhu-:>{!BnM&f#|SY.4G8~l7thF`h+bzEVbk9zr=]2M{xCZSZtD@-7&' );
define( 'SECURE_AUTH_SALT', 'EYCZZ]`6_SD-8kDI|b4,a/c/TVpl$9o*RlcF~_WsZ&~#tTVE8=iERx){NnD%ssKl' );
define( 'LOGGED_IN_SALT',   'B*hvlZ2)9xX4}A%Ei~{>g2TaX/^rc,5lzn-BFS!NNs^iQKlAt!q5h4e<vmnYg]@2' );
define( 'NONCE_SALT',       '%df<!T.l(p[n.vY&H+ x<$=PG[37Px^Z826)E7FlK[~oKkXX]Dd35#@4lrglby}!' );

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
