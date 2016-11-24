<?php

require ( "sphinxapi.php" );
$s = new SphinxClient;
$s->setServer("localhost", 9312);


/*$s->setMaxQueryTime(3);

$s->setFilterString('title','zhongguo');
//$s->SetFilter('browsing_record',array(48));
$result = $s->query('会');
print_r($result);



*/
$s->setFilterString('author','wuguochen');

$result = $s->query('吴郭臣');
print_r($result);







