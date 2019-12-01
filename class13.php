<?php
class IssetTest
{
    public function __sleep()
    {
        echo '深い眠りにつきました';
    }
}

$isset = new IssetTest();
$a = serialize($isset);
?>