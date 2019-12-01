<?php
class TestCallStatic
{
    public static function __callStatic($name, $ary)
    {
        echo 'そのようなスタティックメソッドはありません<BR>';
        echo '$nameの中身は'. $name. 'でした<BR>';
        echo '$aryの中身は'. print_r($ary, true). 'でした<BR>';
    }
}

TestCallStatic::hogehoge('名前', '配列');
?>