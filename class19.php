<?php
class CloneTest
{
    static $hoge = 1;

    public function __clone()
    {
        $this->hoge = ++self::$hoge;
    }
}

$a = new CloneTest();
echo $a::$hoge;
$b = clone $a;
echo '<BR>';
echo $b::$hoge;
?>

