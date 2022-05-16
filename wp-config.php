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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bruna' );
// define( 'DB_NAME', 'u856995613_bruna' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );
// define( 'DB_USER', 'u856995613_bruna' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );
// define( 'DB_PASSWORD', 'YJTdvYynOjZh1' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'YfT)jdRm}JDrB^YE5]1FRfHH;~g-Vxr(StxHIL(gS-aH/l0GphS%O*SnM}k``_21' );
define( 'SECURE_AUTH_KEY',  'pW9L_ZN%F&8/5||cVM#b(,9,krnp82QM4risdEg/M=F]bqzbb$mB>)44pIJ7WdZ/' );
define( 'LOGGED_IN_KEY',    '?G ~[cTF1gU9gq8bm_<PVPEw&Y}`YZUU1(3]%MuvdgDpS;C{q*+QoxF3b2O#BS#Y' );
define( 'NONCE_KEY',        'DeJaDZ`$ u]x[7}X1j/cM1@eXJ4[sGB1C<OwezVQ.u70Vfyr}:jIf8J&Ut:#7c1;' );
define( 'AUTH_SALT',        '@+&x2|DjT]9=T,#8RvLl?wt~-&BbEaFiv` /m%&]L_`=.#KD<$S(CC(hSmp~&{S<' );
define( 'SECURE_AUTH_SALT', '4caNpN)4Lu6+$qWlS$(!%}Ksh&%>M-slCr{.-%`T`*-X1*EHq8-0=uUaiOVH*(}m' );
define( 'LOGGED_IN_SALT',   '?LXz]%w.b:So6CSfI2lc_:2D(ccWh$&vd3X%B,Km7F$H+y19(ox8Ds#1ZMh+/kt5' );
define( 'NONCE_SALT',       '@PrLoN9LD}lz$xcfIs|5yTC^]__7bg$5.`Axbcr^vb^gC4C7&4B; )=7nr}#?ra$' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bt_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
