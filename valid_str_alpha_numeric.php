<?php

/* 유효성검사: 값이 알파벳과 숫자로만 이루어져있는지 검사 */
/* ctype_alnum 사용, 주로 로그인 아이디 등을 검사할 때 사용 */

function valid_str_alpha_numeric($str)
{
    return ctype_alnum((string) $str);
}

$datas = array(
    1, "2", "3AB", "4-", "5하"
);

foreach ($datas as $data){
    echo "$data : ";
    var_dump(valid_str_alpha_numeric($data));
    echo "<br />";
}