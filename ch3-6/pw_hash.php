<?php
/* 비밀번호 암호화 및 매칭
** 단방향 암호화를 함. 암호화에 Bcrypt 알고리즘 사용
** 복호화가 안됨 -> 원래 암호를 알수 없음
** 검증을 위해 확인하는 함수 password_verify
*/

$origin_pw = "1234asdf";
$hash_pw = password_hash($origin_pw, PASSWORD_BCRYPT);

$match = password_verify($origin_pw, $hash_pw);
$not_match = password_verify($origin_pw . "zxcv", $hash_pw);

var_dump($origin_pw);
echo "<br />";
var_dump($hash_pw);
echo "<br />";
var_dump($match);
echo "<br />";
var_dump($not_match);

?>
