<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Correção do erro de instalação de plugins e temas
define('FS_METHOD', 'direct');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xwXiCEzYOWqt|.g/dS!0u#/6z#MF-ca.7+phFr[L-kcsyhIj7dEMBtzfh);=9 a#' );
define( 'SECURE_AUTH_KEY',  '@304teyeA92e!D5:U^LodfT^&KEG%c#;s]]q0.RgT3W)@uwk&gcL9<e|70+`6oo*' );
define( 'LOGGED_IN_KEY',    '2Q,`?0]sIlPu~gk5YsUvl(vA>+52E ZxIR^B@v=x$D2Uw*C^Pdm5>[Gwg@4;<} *' );
define( 'NONCE_KEY',        'b(xc]VD~YiQ>ge&pKg :61FDi6EFcSvoLVKyz**2:k~s#CSP5C*=91/USu{{aS,q' );
define( 'AUTH_SALT',        'Oy<)BgBj8gQYwoK<`693[;i9<x?h4>&yMj;;swKh)c{0C7)Ei1BmA9bji*$*P6A}' );
define( 'SECURE_AUTH_SALT', '%CM85CF*cBST})@?-Zg1=Ot&3gR8-@<B%H@dsUzJym{B{8.5*`h%@6x-Y70n?cc-' );
define( 'LOGGED_IN_SALT',   'c$qf_t0xX7;)%;KJ5RxSo,~8ZRC[Nx|/wd^2ZxSQ :2B+j8bc%Qq$0``AUK_<}Wc' );
define( 'NONCE_SALT',       '}3>UN~qD{|cqN5^my!g)PomPVXD{qH7{F>&c,!R1.Nv+[NZ2j^v!$N_%J>Q l-_%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
