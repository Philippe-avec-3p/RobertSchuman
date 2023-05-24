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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']c{0#h{_%v#C+y]x9K;o#Q&N (E>+&CY :1Z#xsb=i}J@MTkBSpFUXlMj)gOZGvq' );
define( 'SECURE_AUTH_KEY',  '])V4sP<L0MWtzDH[1.o{_7cn8PpMC4AyMu.Qd]_oIK~QBPJ[U$NyGGiD^ESkc-vS' );
define( 'LOGGED_IN_KEY',    '~jv/K2|Ey(`f`qtV(y hX:QxPN@v(Jl2UJA3rC/ ${9DEZ# tatUMwo,BF.J*9zI' );
define( 'NONCE_KEY',        'SNzr`{)y$<7zMOr,7`l9186pg{Pria7}d;KLs7f/.|+Vq4BfW$cb@p#k[4K6>5|>' );
define( 'AUTH_SALT',        'wJ_xIzDLiXtxM(1=8=lQyoD086 t6hk$QRE-Z{UA,^25?)>q>wF@`/)Ha|P[xHJ~' );
define( 'SECURE_AUTH_SALT', 'EV04jgLp$PW+]J_zzzTw[Q0)-CEwZ7/S3_9I{S_<[>|8h85kNB#$zIz`}!.6&x`q' );
define( 'LOGGED_IN_SALT',   '5l;[S@]Nd;&e9c|@Y# YOD/%OCLvNWOA0>X90bl/k+GRh,%fPyr3bgj |3mt*A t' );
define( 'NONCE_SALT',       'br<dH},;_K^>}P{$&I;S&$4UcA%ClU7sf4f/f*a-d@U&3c8t&4ah,7p=ZW^KpV)q' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
