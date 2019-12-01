<?php
class TestGet
{
    protected $get = 7;

    public function __get($name)
    {
        return $this->get = $name;
    }
}

$test_get = new TestGet();
echo $test_get->get;
?>