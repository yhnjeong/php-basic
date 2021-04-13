<?php
/* html 이스케이프
** htmlspecialchars 함수 : html에서 XSS 공격 방어를 위해 특수문자를 인코딩
*/

$html = <<<CDATA
A 'quote' is <b>bold</b> "한글" 데이터
CDATA;
$encode = htmlspecialchars($html);
echo $encode;echo PHP_EOL;

$decode = htmlspecialchars_decode($encode);
echo $decode;

?>