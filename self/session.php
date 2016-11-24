<?php

//~ $lifetime=300;
//~ ini_set('gc_maxlifetime',$lifetime);
//~ session_set_cookie_params($lifetime);
//~ ini_set('session.save_path','/tmp/session');
//~ 
//~ echo ini_get('session.gc_maxlifetime');
//~ session_set_cookie_params($lifetime);
//~ session_start();
//~ print_r( session_get_cookie_params() );
//~ $_SESSION['name'] = 'wuguochen';

//echo phpinfo();


$time = time();
for( $i=1;$i<1000000000;$i++ ){
	
}
$time2 = time();
echo $time2-$time;

