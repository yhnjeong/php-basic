<?php
/*날짜 시간 처리
** 고전적 방식 : date1
** 현대적 방식 : date2 (DateTime() 이용)
** 더하고 싶으면 add 메소드 사용, add함수의 메소드는 DateInteval객체
*/
$date1 = date("Y-m-d H:i:s");
$date2 = new DateTime();
$date2_str = $date2->format("Y-m-d H:i:s");

var_dump($date1); echo "<br />";
var_dump($date2); echo "<br />";
var_dump($date2_str); echo "<br />";

$tomorrow = $date2->add(new DateInterval("P1D"));
var_dump($tomorrow); echo "<br />";   

?>