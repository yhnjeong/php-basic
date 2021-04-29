<?php

/* php에는 문자열이 특정 문자열로 시작하는지(혹은 끝나는지) 확인하는 함수,
** 문자열이 특정 문자열을 포함하는지 확인하는 함수가 없어서 
** 만들어 써야 함 */

function string_starts_with($input, $value){
    var_dump(mb_strrpos($input, $value, -mb_strlen($input)));
    return $value === "" || mb_strrpos($input, $value, -mb_strlen($input)) !== false;
}

function string_ends_with($input, $value){
    return $value === "" || (($temp = mb_strlen($input) - mb_strlen($value)) >= 0 && mb_strpos($input, $value, $temp) !== false);
}

function string_contains($input, $value){
    return mb_strpos($input, $value) !== false;
}


echo "<br />";
var_dump(string_starts_with("안녕하세요.", "안녕"));
var_dump(string_starts_with("안녕하세요.", "하이"));
echo "<br />";
var_dump(string_ends_with("안녕하세요.", "하세요."));
var_dump(string_ends_with("안녕하세요.", "하이"));
echo "<br />";

var_dump(string_contains("안녕하세요.", "녕하"));
var_dump(string_contains("안녕하세요.", "하이"));

?>