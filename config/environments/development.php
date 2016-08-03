<?php
/** Development */
define('SAVEQUERIES', true);
define('WP_DEBUG', true);
define('SCRIPT_DEBUG', true);

define('DB_NAME',     '');
define('DB_USER',     'msuser');
define('DB_PASSWORD', 'msuser');
define('DB_HOST',     'localhost');

define('WP_HOME', WP_PROTOCOL . '://' . $_SERVER['SERVER_NAME'] . '');
define('WP_SITEURL', WP_HOME . '/wp');

define('AUTH_KEY',         'qlq^sZC7h]Ez%Hn$G`vPh:Eb;SR,O7Ze-X*aRa+;Cvx)*]W*sZ5fjcO_l?|Py]C-');
define('SECURE_AUTH_KEY',  'LEb5b-5e`%JC7vE!P:Pmu,U.xIKB4o;nJ@0!/U=l4!NRyjm|X@t-(kA(L>Qlas9R');
define('LOGGED_IN_KEY',    'ZA!ePd2xf},J`naqn;/94F)WpR%bU+LOky)@,ZG@MN%h_(||<yz9Jdtu0u8(v@(?');
define('NONCE_KEY',        '^G3E[Jx4)dE.?gGVvXi,Oz*tdQ%/>FfB(f4B@J:a9<xz(7c>P<9%wa/-23FYxOXk');
define('AUTH_SALT',        's!sXhrt?*nD}IMc1}txP$Hu.QlRlV37;!$]NO1mfT#B{KKG)o7-/e:__Y6!*p9uu');
define('SECURE_AUTH_SALT', 'G;*=ZMQ>dki3L^9DUdBpbmMF>Y76V4ZJJV&32%nqQDua.>^q%7:AMh(FXMD6)0m?');
define('LOGGED_IN_SALT',   'g1+q%ABIKqXiLT}%NJuCqT9Bh%<sY(n}a)oB%B|>BrhTzK[qPq+yi8Ey4)i(l?(b');
define('NONCE_SALT',       '=D(NbJ)M(7&7FV6mCCu&hEr*4{L^K=-l2nO(V{Kbp]eH}e4x]F*Hh;Nme05{|}m@');
