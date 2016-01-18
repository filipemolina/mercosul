<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mercosul');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/Lffp)Rk:;Y<mtu`3qzT~jTOeXXD~k=b{Li(%y+M@|uGsoN|n/oy9]a2M|w||L.s');
define('SECURE_AUTH_KEY',  'Tl5Nwi5G7^/o$ixK9 ,;f(zHoH|}nhC]IT@&}/C  Oq]`o}|u#;IB,~5^!K^w&?/');
define('LOGGED_IN_KEY',    '-(UoH <S%ji~>4L+2R8v4A/tgRachXX#T~X}l -$dTrOwu|>1?~ck%9qi1r1Q=x%');
define('NONCE_KEY',        '&~n$;dJ/k8_m*c%<VS:AUC+~pG]QYMuc5XI$9%KCM-Nb?ZS{$]yh:=k-?vs<.t<h');
define('AUTH_SALT',        '(bL&<E+?|>C+c*MUDV0hO[vz]N)V>q$Aa,NI(07^+N5,t^,=n`4_M2q)3&Y2WMtZ');
define('SECURE_AUTH_SALT', 'A%y!lk7DL @X,wKSg?<kzhh>EF[lF?1pgi5;$7Ia7:pfss<. ob{lU.z{hBO+)Ox');
define('LOGGED_IN_SALT',   'Me5eP}3U|>=8o~HGhB&DAJ4@^-RCHz{Mm5<D}SHq*<<mr>(p()DJz|pZ0G*XLu{D');
define('NONCE_SALT',       '<Q-#2@v<|a#fJ8$n]+sH{|S,s!r]/9)_,^H9]c<v ~fqM{r=?7iRgiW}*~JNu&b,');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
