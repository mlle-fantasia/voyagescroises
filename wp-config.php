<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('REVISR_GIT_PATH', 'https://github.com/mlle-fantasia/voyagescroises'); // Added by Revisr
define('DB_NAME', 'voyagescroises');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'oHR$XfC4$VdPdGk.#ndq]-[!BpS$GeQ]CNEP(>.qM6aHEYwt5yFbu:P6[YgB8O2&');
define('SECURE_AUTH_KEY',  '<Uee7Gqh&A3|t#[GT<MPAH#`EBZ%8|wc:;R~VTK1$<0<(gL[r2<u|o]s:t*3oaVr');
define('LOGGED_IN_KEY',    '}i62..2>x&?zq{?`NgO*S}*hy-pm+ioBOu?p)h:s5K*&ACyq`t0DOb@ h`.r3$[w');
define('NONCE_KEY',        'gk%)7s2*y7{coO(p4%m*#U L2tr{KAr*ZE3E=D!J8RA1kxP!iS}Jc-aMg#m~E0z-');
define('AUTH_SALT',        'qA7D*U#ZdF@JtRI2]W2y]OYRb[cgKA;(yKd{O|&eEJ*FwI:@TRBy4Q67eOxBs[xI');
define('SECURE_AUTH_SALT', 'wwo,-p#~C?L6o2Qt6L>(<l0t84,mMop_EY&S^Tzk1mKoRO%[dkwu]2Xmwouv!tiL');
define('LOGGED_IN_SALT',   ';]C-dREW6sU<<1/N9VP;`<is;Zm$U*W)sQT0_R.PeWng9H24tzDlU=km>Da2.z,o');
define('NONCE_SALT',       'S|4]$qlki@D2KS};9O$/d3*yh-j >(%_L^K9C5i8d=)En*sex|&~?T>>?mgoWe4^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');