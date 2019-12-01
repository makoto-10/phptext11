<?php
class InvokeTest
{
    public function __invoke($args)
    {
        echo 'オブジェクトは関数として使わないでください';
    }
}

$test = new InvokeTest();
$test('hoge');
?>