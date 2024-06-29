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
define( 'DB_NAME', 'LaVieDesPlantes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rS#`MEwc@b{}NkA*T>gsjz<B(>dG]=yBG=11KLE;qbXmaf^Y6#yKX 5;(:7w<6>%' );
define( 'SECURE_AUTH_KEY',  ',.NMmvK*=Xx@brNi[]GiP]@Tf>9le|vH?Y9%]C/Q1wP;w-dR!h`miR*5D/O1,A(i' );
define( 'LOGGED_IN_KEY',    ':$,AlN9Ks-=<vv($tfe8&B{D}Y PJ&:0:exBz,b&FK_0_3;wEe;BX#9Xf@_i=D8~' );
define( 'NONCE_KEY',        '~#UlC?mN>a4KC1&l_Do-R@M,!&^UKc=v>CN.OP7(n*mm|pU}eVR~p)pxNPYa=SMf' );
define( 'AUTH_SALT',        '7.b~.U,~t#>&5atCg_ mH(UQPVyw<+OI~RIqL2;KAsh]vD3J@wHXP{iGpU[}!JKL' );
define( 'SECURE_AUTH_SALT', 'jQV:KV~q`)x9[E&EOjc!kjeaeFH0E*lClw7jLd98Hq/$>M2aX36`XQ&X**MwfXdO' );
define( 'LOGGED_IN_SALT',   '/p]w!V^uamf{.f!N0!9|o(y|C=b]@J:kGL@3md*#%5!b$FfBt.6sXQDPX]IT_yFc' );
define( 'NONCE_SALT',       '*wNE|aFbh!Pc!gAtw{0t__WT,-m7P#_Zn.4N=;3ZjT^0l| z+mVmE[{gK1KT(,(P' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'lvdp_';

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
