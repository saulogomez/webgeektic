<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'geektic');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'J/Ejd(FAe^S^4xra^G^[Wp|5K9}$YNQOjI{cyy&jnLpp,;:rw%n e*#/jEP}Amd-');
define('SECURE_AUTH_KEY', '_4PFgfg[61UI+Ag|iQVmYj6}EohiXK2F  YP8-}d{]Y t&DrBW`Lqjm(_ I#kiM[');
define('LOGGED_IN_KEY', '3B~@Xp0gxH^LxlR|U0&X39-+5i8|1/&{0%.vO~RdKuN+&*&Y(xaC%;<HuvZ,uFc=');
define('NONCE_KEY', 'B+Y2kIk.F]u.R$k5~/DPSH?qU!*0oWhN}i;3u)wL:cXM[/4xL8:z55a-tPg6![l8');
define('AUTH_SALT', 'gGB`>Y4WRS|]C7n|ZGuVW!pm_k7>vE@O{`wII!FXj7P#0e+/?CF+cDul1<F5S}jD');
define('SECURE_AUTH_SALT', 'E6CHQG)[cF(6g**bL9iH{XwP{Jv!wZ=Oo$MZ9o=@R3pTVL}c&w2p}DrupfY.8O]H');
define('LOGGED_IN_SALT', '#.zOr$1Q]T:U>xy*gP=4[NkQ.i%u9k5w,xG!}o0[xSQa>Y!ELd07?5OH+PJ^;,%v');
define('NONCE_SALT', 'dUfSamk+G<@lHAwcLb5}-=f|^8^OG(&_fP<d>gq@<-Zh3_*kvVKpmcQIPf.NW[gP');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

