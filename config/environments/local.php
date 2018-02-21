<?php
/** Development */
define('SAVEQUERIES', true);
define('WP_DEBUG', false);
define('SCRIPT_DEBUG', true);

define('DB_NAME',     '');
define('DB_USER',     'root');
define('DB_PASSWORD', '');
define('DB_HOST',     '127.0.0.1');

define('WP_HOME', WP_PROTOCOL . '://' . $_SERVER['SERVER_NAME'] . '');
define('WP_SITEURL', WP_HOME . '/wp');

define('AUTH_KEY',         '@+]5p@A1F`|V;SOr6vQI/$6bhe1p8V+ikKg>p}|V+JG{.*.%L2hLqK~(Z,|p sO]');
define('SECURE_AUTH_KEY',  '@yKC<[Ns0@Z`_Y[y-3NY.=b*BFEsiIZh=l.#Yh1EAT8=ZAOM|D]P7rLvyv@5M_G{');
define('LOGGED_IN_KEY',    'A#a61Hd;a{Rt+LYnzX+J%S;#+!_ ~<}O+N[<6=>f`a|g+)tgd%+Z$[.L8cz|y%c%');
define('NONCE_KEY',        '8*fD>XI+%L+PtXZ(|KkrKQdM=u41%(,MMT5fb!KVoL5V-r-1--~umr!%1u.!M7)4');
define('AUTH_SALT',        'OBBg8cRL 0V4=MVXRg!81+b-bWR~bI.*+HJ*E=rsAt/|ZaQ*1w!m&8A_*pAk1e<y');
define('SECURE_AUTH_SALT', 'pWFQTLoW-HT7)o^N)nL`&FMx+B7*K[[voJds)o*;B0bC#J8|^~d}Bv2Vv%/;ps_%');
define('LOGGED_IN_SALT',   'y(k4xRTE[1XY|a,t00xieQr?=Xh-V-=S#+JAte&f~x:+m0u3x(1?nB+W|u>HM `+');
define('NONCE_SALT',       'Hh&z[AR;x[3l#Tlv{248b;{|2zrt@v;f`H8g2~/X0dK-k(L+qLBi-A-%-2~Gc]M5');
