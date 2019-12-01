<?php
class StaticTest
{
    public static $ng = 'NGです';

    public function test()
    {
        echo 'プロパティにアロー演算子は使えません';
    }
}

StaticTest::test();
$hoge = new StaticTest();
$hoge::test();
$hoge->test();
echo $hoge->ng;
?>

