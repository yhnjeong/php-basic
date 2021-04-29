<?php

/* 문자열을 특정 문자열로 잘라서 배열해주는 explode 함수가 있으나,
** 파라미터의 순서가 (특정문자열, 전체문자열) 형태여서, 사용하기 헷깔림
** 파라미터의 순서만 바꾼 string_split 함수를 만들어 사용 */

function string_split($input, $seperater)
{
    return explode($seperater, $input);

}

/* 문자열을 줄단위로 잘라주는 함수 */
function string_splitlines($input){
    return explode(PHP_EOL, $input);   // 줄바꿈 상수
}


var_dump(string_split("a,b,c,d,ef,ghi,j", ","));

// heredoc 문법 : <<<특정문자 (시작), 특정문자; (끝) : PHP에서 여러줄 문자열 쓸때 사용
$data = <<<CDATA
안녕
하신가
요?
CDATA;

var_dump(string_splitlines($data));


exit();
?>
