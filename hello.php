<?php
    //Developer:yhnjeong
    //'PHP 3분 핵심 요약집' 도서 학습에 따른 코드
    /* first PHP program
       go go sing */


    /* Variables
    echo "Hello PHP";echo "<br />";
    $a = 1;
    $b = 2;
    $c = $a+$b;
    $d = 3.14;
    $e = "hi";
    $f = 'hello';
    $g = array(1,2,3,4);
    $h = array('a'=>1, 'b'=>2);

    var_dump($a);echo "<br />";  //line break(html)
    var_dump($b);echo "<br />";
    var_dump($c);echo "<br />";
    var_dump($d);echo "<br />";
    var_dump($e);echo "<br />";
    var_dump($f);echo "<br />";
    var_dump($g);echo "<br />";
    var_dump($h);echo "<br />";
    */


    /* 일반배열과 연관배열 
    $a = array(1,2,3,4);
    var_dump($a);echo "<br />";
    array_push($a, 5);
    var_dump($a);echo "<br />";
    unset($a[0]);
    var_dump($a);echo "<br />";

    $b = array('a' => 10);
    var_dump($b);echo "<br />";
    $b['b'] = 20;
    var_dump($b);echo "<br />";
    unset($b['a']);
    var_dump($b);echo "<br />";
    */


    /*조건문 연습
    $second = date('s');
    echo $second;
    if ($second % 3 == 0){
        echo " : 나머지가 0임";
    }
    elseif ($second %3 == 1){
        echo " : 나머지가 1임";
    }
    else{
        echo " : 나머지가 2임";
    }
    */


    /* 반복문 연습
    $a = array(1,2,3,4,5);
    foreach($a as $item){
        echo $item;
        echo "<br />";
    }


    echo "<br />";
    $b = array('a'=>10, 'b'=>20, 'c'=>'hi php');
    foreach($b as $key=>$value){
        echo "$key => $value";
        echo "<br />";
    }
    */


    /* 함수 연습
    function hello_php()
    {
        echo "hello php";
    }

    hello_php();
    echo "<br />";

    function nicetomeet($var)
    {
        echo "nice to meet $var";
    }

    nicetomeet("you");
    echo "<br />";

    function add($a, $b)
    {
        $result = $a + $b;
        return $result;
    }

    $result = add(1,2);
    echo $result;
    echo "<br />";

    function defaultfunc($name='yse'){   // 기본 파라미터 (파라미터가 전달되면 전달된걸 사용, 전달된게 없으면 기본파라미터 사용)
        echo "my name is $name";
    }

    defaultfunc();
    echo "<br />";
    defaultfunc('30min php');
    echo "<br />";
    */



?>
