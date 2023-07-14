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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\FORMATION\projets openclassrooms\PROJET_6\P_6_1\Planty\wp-content\plugins\wp-super-cache/' );
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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J`W)WrqFlk7S?iiV5%nDT[V1>^d9P..$q7*!(ej3dVvoGyR%[R$m#m>TFV<NC-^)' );
define( 'SECURE_AUTH_KEY',  '55hsSqDH.~$[N+5LX=6bX^xo=H1~q%DZuH})tu,j=fGj5#wviI]0l6!Pm^9H)IPi' );
define( 'LOGGED_IN_KEY',    'k/s,DOF$O`l_O|d(5o_E1;b!*@V|]~`{OtfDqdrQSKO7 q9sCp=P3!7x~(C{f[.$' );
define( 'NONCE_KEY',        'a%Wv$X|{Pz)A,fukb#RQ[yOJ;v;9uy-:,7[8QC-}xr7)|5U6k4l@neUOEaar]$]2' );
define( 'AUTH_SALT',        'p*6J[G:x79pj{g>a~=N{u^h,M$a{<NZAzU;FG_94vCH(6xTOe{3{V0]~4XqYBy%h' );
define( 'SECURE_AUTH_SALT', 'aWQ;l,s,xV>iw2YG}{aO|S=6u.-AK]p&C3yR`[=(Px9paac/dj>7Yf!eR&>NA`?Q' );
define( 'LOGGED_IN_SALT',   'DuL}G*3`VFrKnv@j?D^d[mMq,>uD!yQ<&n}nIr::wKAn2gKi?6DJJ_j{M3jTcNDE' );
define( 'NONCE_SALT',       ';)%CfY iQ(-X@5uKJa<MN`Vb(Tpo3xnsD#.;;Ms+ vquV]m8$t-*52^s#]7TwF!l' );
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
