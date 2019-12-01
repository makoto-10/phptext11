<?php
class IssetTest
{
    private $isset = 4649;

    public function __isset($name)
    {
        echo 'wooo';
    }
}

$isset = new IssetTest();
echo empty($isset->isset);
echo isset($isset->isset);
?>