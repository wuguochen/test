<?php

require 'vendor/autoload.php';

$image=new \Mohuishou\ImageOCR\Image("./img/code.png");
$a=$image->find();


