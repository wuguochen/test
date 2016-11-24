<?php
include_once('common.php');
echo 'login.php';

var_dump( $_SESSION );
if( !empty($_POST) ){
	
	if( ($_POST['username'] == 'wuguochen') && ($_POST['passwd'] == 123) ){
		$_SESSION['username'] = $_POST['username'];
	}
}



