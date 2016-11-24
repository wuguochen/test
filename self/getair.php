<?php
$content = file_get_content('http://airport.supfree.net/index.asp?page=1');
print_R( $content );
