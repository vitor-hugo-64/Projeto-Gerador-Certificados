<?php

/* Set this if you would like to display errors and warning messages. */
define('DEBUG', true);

/* The title for the generated web pages.
 * You probably want to put the title of your event here. */
define('TITLE', 'Evento(s)');
/* The url of the WordCamp. */
define('URL', 'Your WordCamp Url');

/* The logo of the event.
 * It's 120px height if you don't want to adjust the webpage's CSS. */
define('TOP_LOGO', 'img/fundo.png');

/* Database connection credentials.
 * See the dbschema.sql file for the required structure. */
define('DB_HOST', 'localhost');
define('DB_NAME', 'certificados');
define('DB_USER', 'root');
define('DB_PASS', 'tzhz9a2n');

/* Don't touch this unless you know what you're doing. */
define('BASE_PATH', __DIR__);

/* Where you want the application to generate the image cache.
 * Remember to create this directory with write permissions. */
define('CACHE_DIR', 'cache');

/* Just leave it. */
define('CACHE_PATH', BASE_PATH . '/' . CACHE_DIR);

/* To know how to adjust the following positions, please take a look
 * at the documentation.
 * https://github.com/viniciusmassuchetto/certificate-generator */

/* Font and location of the person's name. */
define('IMG_NOME_FONT', BASE_PATH . '/font/arialbd.ttf');
define('IMG_NOME_TOP', 1360);
define('IMG_NOME_SIZE', 90);

/*Inserção do dado livro no certificado*/
define('IMG_LIVRO_FONT', BASE_PATH . '/font/arial.ttf');
define('IMG_LIVRO_TOP', 2723);
define('IMG_LIVRO_SIZE', 25);

/*Inserção do dado folha no certificado*/
define('IMG_FOLHA_FONT', BASE_PATH . '/font/arial.ttf');
define('IMG_FOLHA_TOP', 2772);
define('IMG_FOLHA_SIZE', 25);

/*Inserção do dado registro no certificado*/
define('IMG_REGISTRO_FONT', BASE_PATH . '/font/arial.ttf');
define('IMG_REGISTRO_TOP', 2817);
define('IMG_REGISTRO_SIZE', 25);

/* Font color for the texts that will be placed in the certificate. */
define('FONT_COLOR_R', 0);
define('FONT_COLOR_G', 0);
define('FONT_COLOR_B', 0);

global $db;

require('functions.php');

?>
