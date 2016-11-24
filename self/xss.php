<?php


$html = "<div>nihaoma<script>alert(2222222)</script></div>";

//echo $html;
//echo htmlspecialchars($html);


$str = "<p><script>alert(555555)</script></p>";
$preg = "/<script[\s\S]*?<\/script>/i";
$newstr = preg_replace($preg,"",$str);
echo $newstr;
