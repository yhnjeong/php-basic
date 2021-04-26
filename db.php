<?php

/* php에서 mYsql 접속, SELECT, INSERT, UPDATE, DELETE*/
function db_get_pdo(){
    $host = 'localhost';
    $port = '3306';
    $dbname = 'php3min';
    $charset = 'utf8';
    $username = 'php3min';
    $db_pw = "1234";
    $dsn = "mysql: host=$host;port=$port;dbname=$dbname;charset=$charset";
    $pdo = new PDO($dsn, $username, $db_pw);   // PDO는 PHP 내장 객체(PHP Database Object)
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

function db_insert($query, $param = array()){
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $result = $st->execute($param);
        $last_id = $pdo->lastInsertId();
        $pdo = null;
        if ($result) {
            return $last_id;
        } else {
            return false;
        }
    } catch(PDOException $ex){
        return false;
    } finally {
        $pdo = null;
    }
}


function db_update_delete($query, $param = array()) {
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $result = $st->execute($param);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}

/* 쿼리 안에 파라미터 전달하는 2가지(순차배열, 연관배열) 방법.*/

/* SELECT */
var_dump(db_select("select * from tbl_person"));
echo "<br />";
var_dump(db_select("select * from tbl_person where person_id=?", array(1))); //파라미터 배열은 순차배열로 전달
echo "<br />";
var_dump(db_select("select * from tbl_person where person_id = :person_id", array('person_id' => 1))); // 파라미터 배열은 연관배열로 전달
echo "<br />";

/* INSERT */
var_dump(
    db_insert("insert into tbl_person (name, age) values (?,?)", array("php", 25))
);
echo "<br />";
var_dump(
    db_insert("insert into tbl_person (name, age) values (:name, :age)", array("name"=>"php7", "age" =>5)
    )
);
echo "<br />";

/* UPDATE, DELETE */
var_dump(
    db_update_delete(
        "update tbl_person set age = :age where person_id = :person_id", array("age"=>4, "person_id"=>1)
    )
    );
echo "<br />";
var_dump(
    db_update_delete("delete from tbl_person where person_id=?", array(3))
);
echo "<br />";  
?>