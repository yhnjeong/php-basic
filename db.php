<?php
function db_get_pdo(){
    $host = 'localhost';
    $port = '3306';
    $dbname = 'php3min';
    $charset = 'utf8';
    $username = 'php3min';
    $db_pw = "1234";
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
    $pdo = new PDO($dsn, $username, $db_pw);
    return $pdo;
}

function db_select($query, $param=array()){
    $pdo = db_get_pdo();   // MySQL에 접속하는 객체
    try {
        $st = $pdo->prepare($query);    // pdo 객체에서 쿼리를 세팅하면서 statement객체를 리턴받음
        $st->execute($param);    // statement 객체는 실제로 쿼리를 실행하는 역할이며, 이문장처럼 실행
        $result = $st->fetchAll(PDO::FETCH_ASSOC);  // 실행한 데이터 전부를 가지고오는 fetchAll 메소드, FETCH_ASSOC는 연관배열로 가지고 오라는 뜻
        $pdo = null;  // 데이터베이스 커넥션이 끊기도록
        return $result;
    } catch (PDOException $ex){
        return false;   // 쿼리가 실패할경우 false를 반환
    } finally {
        $pdo = null;
    }
}

/*순차배열, 연관배열 이해하고, 쿼리 안에 파라미터 전달하는 것 다시 보자.*/

var_dump(db_select("select * from tbl_person"));
echo "<br />";
var_dump(db_select("select * from tbl_person where person_id=?", array(1)));
echo "<br />";
var_dump(db_select("select * from tbl_person where person_id = :person_id", array('person_id' => 1)));
