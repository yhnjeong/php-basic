<form method="post">
    Name : <input type="text" name="name" />
    Age : <input type="text" name="age" />
    <input type = "submit" />
</form>

<?php

/* Developer: Yonghyun
** 3장 웹 다루기 (php에 내장된 기능을 이용해 웹 다루기)
*/

/* GET
$name=$_GET['name'];
$age=$_GET['age'];

echo "name is $name, age is $age";

// http://localhost/php-basic/ch3web.php?name=YJ&age=32
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "Name is $name, Age is $age.";
}

?>
