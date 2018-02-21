<?php
/** Production */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
/** Disable all file modifications including updates and update notifications */
define('DISALLOW_FILE_MODS', true);

define('DB_NAME',     '');
define('DB_USER',     '');
define('DB_PASSWORD', '');
define('DB_HOST',     '127.0.0.1');

define('WP_HOME', WP_PROTOCOL . '://' . $_SERVER['SERVER_NAME'] . '');
define('WP_SITEURL', WP_HOME . '/wp');

define('AUTH_KEY',         'JBZJ+JOG-s?*;mm#Tw=/+`;f}FM2FH[Nv$G8FY%(sx-cUH.Yp4sL]^dg4J_|p+iC');
define('SECURE_AUTH_KEY',  'RC_e|K7M)?v.!7;zlWp&71(-|YQi?bE^@BNbp+>:mR*&:L~.bPk%5?T$rNxl(SZZ');
define('LOGGED_IN_KEY',    ' jDli8 kiGCLb~@q{U!|vRJQkYOWX(tp?#@Ai?&+E[%cxm,78*,,o=7vmPw6+08?');
define('NONCE_KEY',        '_#5;$yStQaxnZtt7iW|3-69omfu2:@JGvy.kt2D_8q>_3{Q?R0oQyyQ/1JX:UlvS');
define('AUTH_SALT',        '~FAt+h~/D{n31:yioRC.XE1w=}2CB)^Vo(-s4R--=^G*/&E{CL@xHJ~Tb@>jB2ho');
define('SECURE_AUTH_SALT', 'HOO(O:g!Z3Z4P+0{Z:/WyBl{;K;h9QA+S<WI-NBB]Zm0=/+p+.tl+ZA`$b7+e|%)');
define('LOGGED_IN_SALT',   '9TNrssYG.7@ko-06(~T1:^k%(]D6BA=zCt,K-NQW[VmRqDYtv--[OMTV-d(T/!7~');
define('NONCE_SALT',       'mQKXs<CpN3zy6p},IskO,Eov+334-W-CZ[%DWu{%99e%<ONJR{{D2+1qGj9-ZlHt');
