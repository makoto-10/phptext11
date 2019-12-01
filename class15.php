<?php
class ToStringTest
{
    public function __toString()
    {
        return 'オブジェクトがエコーされました';
    }
}

$test = new ToStringTest();
echo $test;
?>