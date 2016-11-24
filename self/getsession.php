<?php
//~ ini_set('session.save_path','/tmp/session');
//~ ini_set('session.gc_probability', 1);
//~ echo ini_get('session.gc_maxlifetime');
session_start();
print_r( $_SESSION );

