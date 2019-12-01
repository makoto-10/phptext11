<?php
class TestGet
{
    protected $get = 7;

    public function __set($name, $value)
    {
        echo $name. '<BR>';
        echo $value. '<BR>';
    }
}

$test_get = new TestGet();
$test_get->get =4;
?>