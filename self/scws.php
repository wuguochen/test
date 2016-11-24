<?php


$text = "北京大酒店";

$cws = scws_open();
scws_set_charset($cws, "utf8");
scws_set_dict($cws, ini_get('scws.default.fpath') . '/dict.utf8.xdb');
scws_set_rule($cws, ini_get('scws.default.fpath') . '/rules.utf8.ini');
//scws_set_ignore($cws, true);
//scws_set_multi($cws, true);
scws_send_text($cws, $text);





// segment
while ($res = scws_get_result($cws))
{
print_R( $res );
	/*foreach ($res as $tmp)
	{
		if ($tmp['len'] == 1 && $tmp['word'] == "\r")
			continue;
		if ($tmp['len'] == 1 && $tmp['word'] == "\n")
			echo $tmp['word'];
		else		
			printf("%s/%s ", $tmp['word'], $tmp['attr']);		
	}*/
}


scws_close($cws);
?>
