<html>
    <!-- php POST 부분 참조
    <form method="post">
        Name : <input type="text" name="name" />
        Age : <input type="text" name="age" />
        <input type = "submit" />
    </form>
    -->
</html>

<?php

/* Developer: Yonghyun
** 3장 웹 다루기 (php에 내장된 기능을 이용해 웹 다루기)
*/

/* GET : 주소창으로 전달된 쿼리스트링 파라미터 읽어오기
$name=$_GET['name'];
$age=$_GET['age'];

echo "name is $name, age is $age";

// http://localhost/php-basic/ch3web.php?name=YJ&age=32
*/

/* POST : http POST 메소드로 전달된 파라미터 읽어오기
** 위 html form과 함께 사용
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "Name is $name, Age is $age.";
}
*/

/* 3.3 redirect
header("Location: /target_url");
exit();
*/

/* 3.4 세션 다루기
function redirect($url){
    header('Location: ' . $url);
    exit();
}

session_start();
$action = $_GET['action'];

if ($action == "set"){
    $_SESSION['key'] = 'session_value';
    redirect("?action=get");
} elseif ($action == "get"){
    if (isset($_SESSION['key'])){
        echo $_SESSION['key'];
    } else {
        echo "NO SESSION";
    }
} elseif ($action == "remove"){
    if (isset($_SESSION['key'])){
        unset($_SESSION['key']);
    }
    redirect("?action=get");
}

*/

?>
