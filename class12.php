<?php
class IssetTest
{
    private $isset = 4649;

    public function __unset($name)
    {
        echo 'unset!';
    }
}

$isset = new IssetTest();
unset($isset->isset);
?>