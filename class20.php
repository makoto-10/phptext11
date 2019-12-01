<?php
abstract class TestGet
{
    abstract public function tel();

    public function test()
    {
        echo 'test です';
    }
}

class TestExtends extends Testget{
    public function tel()
    {
        echo '電話です';
    }
}

$hoge = new TestExtends();
$hoge->test();
$hoge->tel();
?>