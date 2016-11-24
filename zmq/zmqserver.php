<?php
$content = new ZMQContext(1);

$responder = new ZMQSocket($content,ZMQ::SOCKET_REP);
$responder->bind("tcp://127.0.0.1:5555");
$i = 0;

while(1){
	$request = $responder->recv();
	printf("recevied request :[%s]\n",$request);
	
	logtxt($request);
	usleep(100);
	$i++;
	$responder->send($i);
}

function logtxt($msg){
	$handler = fopen("/tmp/log/zmq.log","a+");
	fwrite($handler,date('Y-m-d H:i:s')."   ".$msg."\r\n");
	fclose($handler);
}
