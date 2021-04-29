<?php

/* 클래스: 특정 역할을 하는 타입 ; 멤버변수와 메소드를 가질 수 있음.
** 클래스 타입의 변수를 '인스턴스'라 부름
** 멤버변수:  클래스 안에서 선언된 변수이자 클래스의 인스턴스가 가지는 속성(프로퍼티)
** 클래스 안에 정의된 함수를 메소드라고 부름, 메소드는 함수와 동일하게 리턴값을 가질 수 있음
** 생성자: 인스턴스가 처음 생성될 때 자동으로 실행되는 초기화 메소드,
**   __construct라는 이름의 메소드가 무조건 생성자가 된다.
** $this: 인스턴스 자신을 나타내는 키워드, 인스턴스에 속한 메소드나 멤버변수를 호출할 때 $this로 참조
**  참조시에는 -> 키워드 사용. (배열의 => 와 헷깔리지 말것. 타 언어의 .와도 헷갈리지 말것)
** return $this는 인스턴스 자신을 리턴한다는 뜻.
** 주로 하나의 객체에 여러 메소드를 연쇄적으로 호출하는 메소드 체이닝을 사용할 때 사용

** "" 문자열이나 히어닥 문법은 내부에서 변수를 치환할 수 있음, 
** 이때 복합형 변수일 경우 ${변수} 형식을 이용, 복합형 변수의 값을 가져올 수 있음

** 멤버변수나 메소드 이름 앞에 static을 붙이면 정적인 속성임
** 정적인 변수는 인스턴스에 속하지 않고 클래스에 속하며
** 정적인 메소드나 프로퍼티를 호출할 때에는 -> 가 아닌 ::로 호출
** 정적인 메소드나 프로퍼티를 내부참조시에는 self를 이용
** 즉 클래스의 데이터를 이용할 때에는 self를, 인스턴스의 데이터를 이용시에는 $this를 사용
** static이라는 키워드가 메소드가 아닌 일반 함수 안에서 사용되면 함수 자체가 실행이 끝났음에도
** 상태를 가지고 있는 코루틴으로 작동, 같은 키워드지만 사용되는 곳에 따라 의미가 다름
*/


class Sample   //class 이름은 대문자로 시작하는 CamelCase 형식을 따르는게 좋음
{
    // member vaiable
    private $name;
    private $age;

    // constructor
    public function __construct()
    {
        $this->name = "yse";
        $this->age = "10";
    }

    // method
    public function tell()
    {
        echo "my name is {$this->name} .";
        echo " and my age is {$this->age} .";
    }

    // method. return $this
    public function add_age($age)
    {
        $this->age += $age;
        return $this;
    }

    // static method
    public static function factory()    //팩토리 디자인 패턴으로 인스턴스를 생성
    {
        return new Sample();
    }
}

$sample = new Sample();
$sample->tell();

echo "<br />";
Sample::factory()->add_age(3)->tell();

/*php는 new Sample()->add_age() 처럼 
**생성자 호출 후 바로 다른 인스턴스의 메소드를 호출하는 생성자 메서드 체이닝 불가
**이러한 불편함 때문에 정적 팩토리 메소드를 만드는 경우가 많음.
*/

?>