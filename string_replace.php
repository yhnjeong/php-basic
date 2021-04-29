<?php

/* 문자열 바꾸는 함수인 str_Replace 는 파라미터 순서가 (as-is, to-be, whole) 이라 
**헷깔리므로 파라미터의 순서만 바꾼 string_replace 함수를 만들어 사용하자.*/

function string_replace($input, $old_str, $new_str){
    return str_replace($old_str, $new_str, $input);

}

var_dump(string_replace("안녕하세요.", "하세요", "히 가세요"));

?>
