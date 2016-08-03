<?php
/** Staging */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
/** Disable all file modifications including updates and update notifications */
define('DISALLOW_FILE_MODS', true);

define('DB_NAME',     '');
define('DB_USER',     '');
define('DB_PASSWORD', '');
define('DB_HOST',     'localhost');

define('WP_HOME', WP_PROTOCOL . '://' . $_SERVER['SERVER_NAME'] . '');
define('WP_SITEURL', WP_HOME . '/wp');

define('AUTH_KEY',         '*Xo`+ys}-/m[QvUc/rpOt>cXy|[Sg-f& hS3!#wDqsC](RqR)5XE1VF$GF. {~Bw');
define('SECURE_AUTH_KEY',  '}kZr>+j([Ae+o`3D[>)eldCE&Q&X@ePX-{(WnyG7EF{;XN,F_xy/%Ilt|#C*c&F7');
define('LOGGED_IN_KEY',    '_- [3)sqR-Qa`Ake4f/i|_Zr/[9~^PwG?!$<@rZ8HZ!RH6]$y:FqNXQ]|APVwos9');
define('NONCE_KEY',        'FE(1q*>_12Uq#.QC2-r{,C!uy1*D0J9SxH.W+0u1A<k([LNwqasGSo*pdlj[5M|s');
define('AUTH_SALT',        'n[K@)I;;+,%4,O2r:K@-Ti?:HU]GU+4~5{>P|{yS|cLh|S7NRW/1Ik^&ZEbQV9,{');
define('SECURE_AUTH_SALT', 'pvO#.vYgf|+>[~^pQGSe]mq)o-NUIHS4gQ`V2tJ1mLyS3-U/Wdki:Vp^JyW_jU|$');
define('LOGGED_IN_SALT',   ' wV-B<|GC+t8H?pAk6xWLe=*&(zRG33 vfLqIR=BhnFNapa-1 Wq|S5#;Y~oTVt1');
define('NONCE_SALT',       ' Q#-)Xd8IhD-Bdl0%&U1=K0LUO =[-]r:(wN|i0*MKtuOj[0a8ZlWuXnDF/`-Zs:');
