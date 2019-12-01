<?php
namespase hoge\fuga\bar\foo\special;
use hoge\fuga\bar\foo\special as abeshi;

class StaticTest
{
    public static $ng = 'NGです';

    public function test()
    {
        echo 'プロパティにアロー演算子は使えません';
    }
}

StaticTest::test();
$hoge = new abeshizue\StaticTest();
$hoge::test();
$hoge->test();
echo StaticTest::$ng;
echo $hoge->ng;
?>

