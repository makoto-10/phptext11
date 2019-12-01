<?php
class IssetTest
{
    public $hoge = 2;

    public function __sleep()
    {
        echo '深い眠りについた';
        return get_class_method($this);
    }

    public function __wakeup()
    {
        echo '目覚めたよね';
    }
}

$isset = new IssetTest();
$b = serialize($isset);
$c = unserialize($b);

print_r($b);
echo '<BR>';
pront_r($c);
?>