<?php
//~ $context = new ZMQContext();
//~ 
//~ $request = new ZMQSocket($context,ZMQ::SOCKET_REQ);
//~ 
//~ $request->connect("tcp://127.0.0.1:5555");
//~ $date = time();
//~ 
//~ if( $request->send( $date )!==false ){
	//~ echo "send success\n";
//~ }
//~ 
//~ $reply = $request->recv();
//~ printf("Received:[%s]\n",$reply);


for( $i=0;$i<10;$i++ ){
	echo uniqid()."<br>";
}


