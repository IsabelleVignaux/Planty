<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B?xL,v|oK)^O9=pdZz#xCa1ppZfN$t.{%lB:CTFt}K}#[pAnkpd<OPC8j#1p*.np' );
define( 'SECURE_AUTH_KEY',  'l33&}@^;^WbkT<:ol#)@-[DolDL$f>QT?5BE,~1rpI7sszMd8)>l} $1 Dgc;8UP' );
define( 'LOGGED_IN_KEY',    'frhEeH%3UCw0]~8NUch2Z22yeAqvGK-)8t30yzb]X);)Lh2V^qneYdK)J1xsVA?+' );
define( 'NONCE_KEY',        '4$r.HhSH^d7JPmj`qN=/u:UBhz@%sNkgq|#V%c@t%5i`9!7{2O.BlS;6AtA6VC8%' );
define( 'AUTH_SALT',        'PRcpI^$0CA/pFCZMp DY4X$L4RxB;&8zvQWCc+wQHMz5@_*E<-XDNIjVIqb) -$$' );
define( 'SECURE_AUTH_SALT', 'A+~V.WEsDU1j]DFxrL}B%V%Nm+K!T}uD7GxU5?A!Y*]D}gr9-6W+m&<px>vPp2{S' );
define( 'LOGGED_IN_SALT',   'jb;6(pzN_16;]Bq]bF*`b-v|VQO[ y{e1T^bhtLao(X{1%gr,u3j!/#vo<f%B4xO' );
define( 'NONCE_SALT',       'qpVUNfC}2~|+Y_!~iX].Y~d~NJ$ovkB)d86>i1c!=oi DlHYQ5^zS2oV-_Cmzk}F' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
