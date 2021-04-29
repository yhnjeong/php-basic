<?php

/* 유효성 검사: email인지 확인 */

$emails = array(
    'aaa@bbb.com',
    'abc',
    '.com',
    '@.com',
    'aaa@bbb.com ds'
);

foreach ($emails as $email) {
    echo "$email : ";
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    echo "<br />";
}
echo "<br />";


/* 맞지 않는 데이터를 정제해서 return */
foreach ($emails as $email) {
    echo "$email : ";
    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
    echo "<br />";
}
