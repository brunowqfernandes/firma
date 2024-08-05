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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hostcomb_firma' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'hostcomb_firma' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'oito@meia' );

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
define( 'AUTH_KEY',         'z/dtBV[3 $e2?RQ^=P`S5~k/HifC*(W3j-UjBXfJ02*)Z7pO)D#ynC#8e@kU18zP' );
define( 'SECURE_AUTH_KEY',  '8qPrILFs(.A:0emK]O%Ei;Fvor|f%&/7.&1xQt^T#tb7Qhqmr)gLzi;Es{MK<Obc' );
define( 'LOGGED_IN_KEY',    '$vm=0ve%A9N_#=DP}(6nK~wP{}<khuQ2}S)Nfjg7B-%H6[X_;>qcZ#q~oLXKe(cM' );
define( 'NONCE_KEY',        '44pVlfjG$FuheflImn;gvYtTqgs=A1z1IR%Y2XspcA0kl^pU}o^pl`P!&!ZxJz<d' );
define( 'AUTH_SALT',        'NAS(ZV322S%KuYH&*MKy.!Y;RTI>-2:6>E_mT},`pw]lUF]qXw4}ZQW/,)2.-y=t' );
define( 'SECURE_AUTH_SALT', 'wQ=3SN@QQjVQF}xVA;?yORxu3Qy@^hi ,#3h`Qk=N>}S=sauH|2X!zywZ)NW/V/2' );
define( 'LOGGED_IN_SALT',   'm4<kAPNxYVu!&Y{!A(nOqx>AZ)&%AAkSB?kf2&lOor}H#6G%OS2+i%7Uu}I$;2}`' );
define( 'NONCE_SALT',       'XUQca!7X}V=0R}s*F&7_FDkXMI +&{+79z4I%+3@Cp[3:KbceHH+GHPO:d1vc|-O' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
