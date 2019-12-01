<?php
interface TestInterface
{
    public function a();
    public function b();
}

interface TestInterface2
{
    public function c();
}

class UseInterface implements TestInterface, TestInterface2
{
    public function a()
    {
        echo 'a';
    }

    public function b()
    {
        echo 'b';
    }

    public function c()
    {
        echo 'c';
    }
}

$hoge = new UseInterface();
$hoge->c();
?>