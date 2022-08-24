<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-site' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'hello1234' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'r1_2/ZO;gV/T0SgQ22h8Txs!%2<2<?kw=uf=LUIVn^+=^O`$]#[y[8?1PA7Kv|Jy' );
define( 'SECURE_AUTH_KEY',  'B:AZKlbQYAijAOI%`I>SVj3l=:84`oEGv3O[HvD^n{VbWC!;Yo()MF=ZJWN@Y/K=' );
define( 'LOGGED_IN_KEY',    '6vo)=S/:+KwOWM;jEe4@3b!7?^J*2u<<y0OdOTFdvdG}K>+Uj%uk3q_IOB}Kr/-/' );
define( 'NONCE_KEY',        'Dhc9P}.>)J$iN{!-NWo29B@+T&;)Azl+0QIPCayi[CVrW^L_.aA}YeHx21H(B0j?' );
define( 'AUTH_SALT',        '=KJFq%<G,SD`A*ssnYS>z*]Lq7T=`&B{&O~+a2c|SG:(caEuKs0qnB0`kq9lgeqi' );
define( 'SECURE_AUTH_SALT', 'HkExc)DSA?O|%A=7c[RZAcUMJOp yLBlxOe]*#bgfQ|L5~w7xx9Du8z+Z1mUpL6?' );
define( 'LOGGED_IN_SALT',   'JsPG<E_/Ccf3Uu2E-9VeH`=QloU@N;WQ))1HA{4VYI(pvYPVnyk]6w)bwBX3;Ewi' );
define( 'NONCE_SALT',       's/>SF<_X69hm&4MY^6-`ey5p5LzX3aG?$Hu8&TrfL2D$PX&8j]zBj7{yL_SfO]hu' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
