<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$data = [
	
	'abcs'=>[
		'name'=>'wuguochen',
		'sex'=>'man'
	],
	'absc'=>[
		'name'=>'wuguochen',
		'sex'=>'man',
		'class'=>'267',
	],
	'sabc'=>[
		'name'=>'wuguochen',
		'sex'=>'man',
		'class'=>'267',
	],
	'test2level'=>[
		'name'=>'wuguochen',
		'sex'=>'man',
		'class'=>'267',
	],
];
//~ 
//~ $redis->set('strTest',$data);
//~ $redis->hSet('hashTest',"hashTest",$data);
//~ $redis->lpush('listTest',"listTest1",'redis','mongodb','rabitmq','PHP');



foreach( $data as $key=>$value ){
	if( is_array( $value  ) ){
		foreach( $value as $k=>$v){
			$redis->hSet($key,$k,$v);
		}
		continue;
	}
	$redis->hSet('test',$key,$value);
}

//print_r( $redis->hGetAll('test') );

function getUniqueId($redis){
	$first = $redis->lrange('listTest',0,0);
	$first = isset( $first[0] ) ? $first[0] : 0;
	$time = strtotime( date('Y-m-d') );
	
	if( $time-$first > 86400 ){
		$redis->del('listTest');
		$redis->lpush('listTest',$time);
	}
	$redis->rpush('listTest','justKey');
	echo $redis->llen('listTest')."<br>";
	
}
getUniqueId($redis);






