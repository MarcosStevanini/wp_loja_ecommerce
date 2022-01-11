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
define( 'DB_NAME', 'wp_loja_woocomerce' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4Ahd_u%:~;~3u8Fij+Kb  ,/G}0+vC26ZGkO[Sglq@fmR?*a$5a>v*#&TJ e{](]' );
define( 'SECURE_AUTH_KEY',  'APp0Y[v1q/cm0Bnx[7O2ND44d{wZidSQsQ42[2RN$*-Cri+ H4)W+zx(VdIx7n<y' );
define( 'LOGGED_IN_KEY',    '?JN)Qv1UK*NFyhmOy`_4RZS`pi)q_n/8+45~>3a,syjY2O`IHQp8OYi4&BC9 Eed' );
define( 'NONCE_KEY',        'lT]_y{TqwW;mur/t*?@~uK2Wr+v&hq:GPU#i%}}@!o3BtIWG?/>?EBXG5HwpqO:8' );
define( 'AUTH_SALT',        'm!yA,D>=}q15ZH,SYkBH}2(k3YKA>9yOGxIF5d@3_ED{3`:])JUqhEWS>6f_Jl){' );
define( 'SECURE_AUTH_SALT', 'ral P>c~v?(<ePT[G`PKGF5[oy):XJ8g-yBWh3F9adRR3@D}AS&50!N$9_#gkOUQ' );
define( 'LOGGED_IN_SALT',   '&!_[uMg 9Gl@?fU7|4c5IB,Ts%Qz,HR]:C;^G[ _MI`&JpIq(WKJBX.RP?(W#6Hd' );
define( 'NONCE_SALT',       '8yDc$Qc7=tVf{WN*g`+@L2wjzp@x*/$pz#lsZDg9q[7p[cLYVu!#ss94LX(6x;k{' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
