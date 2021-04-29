<?php

/* "웹에서 사용자의 입력은 믿으면 안된다." -> 유효성 검사 필요*/
/* 빈 문자열이거나 빈 배열이면 false, 아니면 true를 반환하는 함수*/

function valid_required($input){
    return is_array($input) ? empty($input) === False : trim($input) !== '';
}

var_dump(valid_required(""));
var_dump(valid_required(array()));
var_dump(valid_required("php"));
var_dump(valid_required(array(1)));

