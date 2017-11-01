<?php

define('DB_NAME', 'NAME');

define('DB_USER', 'USER');

define('DB_PASSWORD', 'HESLO');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');



define('AUTH_KEY',         'on I|AZQ,47fflWq~%QM0?*JQ++ZSh%(^4*PsV<xJ?vdZB.eRwn*7:~@4qh?Yp.H');
define('SECURE_AUTH_KEY',  'qFmBCA0:pW4xT6=6QU79dcpo/4`(I^-5L=;B7X3|!osn)ALi>1S/2P/J-*F!!oN.');
define('LOGGED_IN_KEY',    'H;x@JG<MX3&WJWKrLPWWWS-98d<28yj?(gg6-C*tCwoRBN^3A8v&:/nVm.sF^| .');
define('NONCE_KEY',        '8KwwK{rh|B%*!X&oh7K PE;%+A%i@{anmF*6h8$#F++~]I_=T7z[Sy18O6b-m0ix');
define('AUTH_SALT',        'MHw[f8,f#t!m}Q`7SJeBR d@P,BP@+X`7[|e94KgeIAT(F`!+*h=XE:Cn!q+>Hw5');
define('SECURE_AUTH_SALT', 'Y#}|?8iVr8Zy6|9&]5XAnyTVSFZ|^+`bHh8;}6%7<QPVL|2Y*VK;I_GfH21$U,@V');
define('LOGGED_IN_SALT',   'pIO|e%F>{2iw+w=v~=H`G,cx}R4$3mTG+Xe`wh{:PlQTOQ<~#dMxqG|(-c.t(%}Y');
define('NONCE_SALT',       'Y-C@JR1G;+)c=GqBhGV&id(EOJH*8-EV6mf+-PtS5MLcs_t:<{>6B+49.Fn0@wP.');
$table_prefix  = 'wp_';



define('WPLANG', 'cs_CZ');



define('WP_DEBUG', false);



if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



require_once(ABSPATH . 'wp-settings.php');