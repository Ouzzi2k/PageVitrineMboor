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
define( 'DB_NAME', 'Mboor' );

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
define( 'AUTH_KEY',         '|?xIm>A}D3:SUyziwx&3``)x7aSL?IKYDkLHOa4> bGLNpNovw$E9D3bC8L!F#jW' );
define( 'SECURE_AUTH_KEY',  ':pXk>m92L=Epb#39}haE038zodnl1-,~)}c[Plt9XETq&5D@Y~bI]0(MpRmWMV5@' );
define( 'LOGGED_IN_KEY',    'MsT*zJBiAzu*H0S$2xz8jckgK1N4FL)nY8&Z<b&e4_qrgo1 y|#,p%/Lx{^-zR@v' );
define( 'NONCE_KEY',        ')!oL=v1lB`]P~`mpodLVZZokfSVt;=oIB=t/&$V`!.gyA)<1s_.Y DBco.y/X$j&' );
define( 'AUTH_SALT',        'OIi+|?Q1,#>z/C@@cgii(?Ih%<7S-EefuU.IqLSy9s;1l_-l,4qD_i#X+POHEA&$' );
define( 'SECURE_AUTH_SALT', 'Tq?bO9 S+4|lSzt6-ihm$S:-sr>F`BnR&JO7QwJVlZ#&/D<<T2H/xh];g* =<f>G' );
define( 'LOGGED_IN_SALT',   '1]a;<Wc78Lp5{^ynH7iR~^QK1q-06k[b-N*|dlJP^6tA2Ba(y!s:J2c9b>4J}fgd' );
define( 'NONCE_SALT',       'Dk:lUlXKFz/+^Nc~y2#!D:J=^8jRFo8uNa14rZ[/60ADI]o4*Pu2$.cP E+.&k64' );
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
