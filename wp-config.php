<?php

// BEGIN iThemes Security - Ne pas modifier ou supprimer cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactiver l’éditeur de fichier - Sécurité > Réglages > Modifications de WordPress > Éditeur de fichier
define( 'FORCE_SSL_ADMIN', false ); // Forcer SSL pour le Tableau de bord - Sécurité > Réglages > Secure Socket Layers (SSL) > Forcez l’utilisation du SSL pour votre Tableau de bord
// END iThemes Security - Ne pas modifier ou supprimer cette ligne

define('FS_METHOD', 'direct');

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db729484658' );

/** MySQL database username */
define( 'DB_USER', 'dbo729484658' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TjxNJapoGrnUADzRsdIA' );

/** MySQL hostname */
define( 'DB_HOST', 'db729484658.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']ZctI;WpTtwZi0 n$]|Sw`p3,IRR6>Q]F0ndJc~KzX71GA6<[R97o?8%uc;O02T6');
define('SECURE_AUTH_KEY',  '4{ yuH>Q<6*Tc2onPFzlqDU)^6+^3+jEjtXrL|R]B5W{wxMg()skt0=BkK|3-H&I');
define('LOGGED_IN_KEY',    'b?g>f?DB@})?aO~EIA@a=%9KBgGiW@2<7+%<Z!&=SJnU,:|vzA[%o+`PGxC#2!F!');
define('NONCE_KEY',        ' <.x:&;]s)CZ_)mS3%B_rLySa/2JRm{xlCHxOjRRom7C@9ctS+8?eKdLp4W*-o)&');
define('AUTH_SALT',        'C.bKm1=Njszo--8j-m P.6W SLfYXB_x~c:Wpr;j4IjP}sc/R.mwumYXjd<({bdB');
define('SECURE_AUTH_SALT', 'Q4aPJqErw;:s/){|s(a+#?LN-rCX0v^jtYy%:YT:q)]{/m;CO6xd)RWnD.-+X3wz');
define('LOGGED_IN_SALT',   '(h[KwqCK;$^*ozg1-eOlPlM-o!@Tq9yA,9AUP(oh;|D? _gZx<)9LWIjEKl>3-=E');
define('NONCE_SALT',       '){*W/iUv=JX9=u?@5GoW`6!A[<3),vBCNq3w%oCAYn;>KR}03On@PW-KO`n}>y0R');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dHFxx';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
