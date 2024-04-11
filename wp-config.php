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
define( 'DB_NAME', 'bdp6' );

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
define( 'AUTH_KEY',         'cb)bEp)LV?(}/Rt>a38E({:6@9k/$:Xw=T^s{}$|G0_[Kp=XM_wAx- ~?Q+7rlq6' );
define( 'SECURE_AUTH_KEY',  '5-~gatD/l=,Og.j97f4D;C}7mkK;J|B7z@Z2,k:Chqq^,:sr(xC)J I)4[2)#/aT' );
define( 'LOGGED_IN_KEY',    'CxdnYA[l`0-I++9GX9 ?J77o#& sPr07`pR:ddO1|[Zy@FbIBQ:>57Y,*f#~)=#j' );
define( 'NONCE_KEY',        'Ir5|1eCk3L]7w%7+G}JRLg8~d+vVD`d-NG,M6/r1{4zebb~}EH}<3$<f(hBj;>B{' );
define( 'AUTH_SALT',        'aiC*{<?|x$io+s0?3B|T6o=|Icg3o!]_^}y0m}zKM<C$N[/=uP?#VQ>gx!(h4pfE' );
define( 'SECURE_AUTH_SALT', '=VE9[EbRQ<>wtq%_;,WreOZ1ER%y)^$1l?A0iDMfouJeW{rRK=5~=9|eqp;z]oQ@' );
define( 'LOGGED_IN_SALT',   '=iYj#2a7Vk1kk6b>7<TXlK1)O$GIc*:* )nzYO(it=>PDHAZsPywkl~_})Dh|y|9' );
define( 'NONCE_SALT',       '+?KYuE;MYW,WOhMG| @M$k3n4]#B1}cV#d-zZ@AIQ@9j%*nqni:k6iN1mCS`w4Uu' );
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
